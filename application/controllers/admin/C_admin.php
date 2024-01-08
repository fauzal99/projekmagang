<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url(""));
        }
        $this->load->model('M_user');
        $this->load->model('M_berkas');
        $this->load->model('M_berita');
        $this->load->model('M_album');

        $this->load->library('session');
    }


    public function index()
    {
        $data['berkas'] = $this->M_berkas->tampil_data();
        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_sidebar');

        $this->load->view('admin/V_admin', $data);
        $this->load->view('templates/admin_footer');
    }
    public function berita()
    {
        $data['berita'] = $this->M_berita->tampil_data();

        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_sidebar');

        $this->load->view('admin/V_berita', $data);
        $this->load->view('templates/admin_footer');
    }
    public function tambah_berita()
    {
        // Tangkap data dari form
        $keterangan = $this->input->post('keterangan');
        $tanggal = $this->input->post('tanggal');
        // Konfigurasi upload file
        $config['upload_path'] = './berkas/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 102400; // 100MB (100000KB)
        // Generate unique filename

        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar_berita')) {
            // Jika upload file PDF berhasil
            $upload_data = $this->upload->data();
            $gambar_berita = $upload_data['file_name'];

            // Data berkas yang akan disimpan ke database
            $data_berita = array(
                'gambar_berita' => $gambar_berita,

                'keterangan' => $keterangan,
                'tanggal' => $tanggal
            );

            $this->M_berita->tambah_berita($data_berita);

            // Redirect atau tampilkan pesan sukses
            redirect('index.php/admin/C_admin/berita');
        } else {
            // Jika upload file gagal
            $error = $this->upload->display_errors();
            // Tampilkan pesan error
            echo $error;
        }
    }
    public function album()
    {
        $data['album'] = $this->M_album->tampil_data();

        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_sidebar');

        $this->load->view('admin/V_album', $data);
        $this->load->view('templates/admin_footer');
    }
    public function tambah_album()
    {
        // Tangkap data dari form
        $keterangan = $this->input->post('keterangan');
        $tanggal = $this->input->post('tanggal');
        // Konfigurasi upload file
        $config['upload_path'] = './berkas/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 102400; // 100MB (100000KB)
        // Generate unique filename

        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar_album')) {
            // Jika upload file PDF berhasil
            $upload_data = $this->upload->data();
            $gambar_album = $upload_data['file_name'];

            // Data berkas yang akan disimpan ke database
            $data_album = array(
                'gambar_album' => $gambar_album,

                'keterangan' => $keterangan
            );

            $this->M_album->tambah_album($data_album);

            // Redirect atau tampilkan pesan sukses
            redirect('index.php/admin/C_admin/album');
        } else {
            // Jika upload file gagal
            $error = $this->upload->display_errors();
            // Tampilkan pesan error
            echo $error;
        }
    }
    public function hapus_berita($id_berita)
    {

        $this->M_berita->hapus_berita($id_berita, 'berita');

        redirect('index.php/admin/C_admin/berita');
    }
    public function hapus_album($id_album)
    {

        $this->M_album->hapus_album($id_album, 'album');

        redirect('index.php/admin/C_admin/album');
    }
    public function ubah_berita($id_berita)
    {
        $data['berita'] = $this->M_berita->get_berita_by_id($id_berita);
        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_sidebar');

        $this->load->view('admin/V_ubah_berita', $data);
        $this->load->view('templates/admin_footer');
    }

    public function ubah_album($id_album)
    {
        $data['album'] = $this->M_album->get_album_by_id($id_album);
        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_sidebar');

        $this->load->view('admin/V_ubah_album', $data);
        $this->load->view('templates/admin_footer');
    }

    public function F_ubah_album()
    {
        // Tangkap data dari form
        $id_album = $this->input->post('id_album');
        $keterangan = $this->input->post('keterangan');

        // Konfigurasi upload file
        $config['upload_path'] = './berkas/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 102400; // 100MB (100000KB)

        // $this->load->library('upload');
        $this->upload->initialize($config);

        // Cek apakah ada file gambar yang diunggah
        if (!empty($_FILES['gambar_album']['name'])) {
            // Lakukan upload gambar
            if ($this->upload->do_upload('gambar_album')) {
                // Jika upload file berhasil
                $upload_data = $this->upload->data();
                $gambar_album = $upload_data['file_name'];

                // Hapus file gambar lama jika ada
                $album_lama = $this->M_album->get_album_by_id($id_album);
                if ($album_lama->gambar_album != '') {
                    $file_path = './berkas/' . $album_lama->gambar_album;
                    unlink($file_path);
                }
            } else {
                // Jika upload file gagal
                $error = $this->upload->display_errors();
                // Tampilkan pesan error
                echo $error;
                return;
            }
        } else {
            // Jika tidak ada perubahan gambar, gunakan gambar lama
            $gambar_album = $this->input->post('gambar_album_lama');
        }

        // Data berita yang akan diubah di database
        $data_album = array(
            'gambar_album' => $gambar_album,
            'keterangan' => $keterangan,
        );

        $this->M_album->ubah_album($id_album, $data_album, 'album');

        // Redirect atau tampilkan pesan sukses
        redirect('index.php/admin/C_admin/album');
    }
    public function F_ubah_berita()
    {
        // Tangkap data dari form
        $id_berita = $this->input->post('id_berita');
        $keterangan = $this->input->post('keterangan');
        $tanggal = $this->input->post('tanggal');

        // Konfigurasi upload file
        $config['upload_path'] = './berkas/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 102400; // 100MB (100000KB)

        $this->load->library('upload', $config);

        // Cek apakah ada file gambar yang diunggah
        if (!empty($_FILES['gambar_berita']['name'])) {
            // Lakukan upload gambar
            if ($this->upload->do_upload('gambar_berita')) {
                // Jika upload file berhasil
                $upload_data = $this->upload->data();
                $gambar_berita = $upload_data['file_name'];

                // Hapus file gambar lama jika ada
                $berita_lama = $this->M_berita->get_berita_by_id($id_berita);
                if ($berita_lama->gambar_berita != '') {
                    $file_path = './berkas/' . $berita_lama->gambar_berita;
                    unlink($file_path);
                }
            } else {
                // Jika upload file gagal
                $error = $this->upload->display_errors();
                // Tampilkan pesan error
                echo $error;
                return;
            }
        } else {
            // Jika tidak ada perubahan gambar, gunakan gambar lama
            $gambar_berita = $this->input->post('gambar_berita_lama');
        }

        // Data berita yang akan diubah di database
        $data_berita = array(
            'gambar_berita' => $gambar_berita,
            'keterangan' => $keterangan,
            'tanggal' => $tanggal
        );

        $this->M_berita->ubah_berita($id_berita, $data_berita, 'berita');

        // Redirect atau tampilkan pesan sukses
        redirect('index.php/admin/C_admin/berita');
    }

    public function coba_berita($id_berita)
    {
        $tanggal = $this->input->post('tanggal');
        $keterangan = $this->input->post('keterangan');


        // Cek apakah ada file gambar yang diunggah
        if ($_FILES['gambar_berita']['name']) {
            // Konfigurasi upload foto
            $config['upload_path'] = './berkas/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 102400; // 100MB

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar_berita')) {
                // Jika upload foto berhasil
                $upload_data = $this->upload->data();
                $gambar_berita = $upload_data['file_name'];

                // Data pelanggan yang akan diupdate di database
                $data_pelanggan = array(
                    'tanggal' => $tanggal,
                    'keterangan' => $keterangan,
                    'gambar_berita' => $gambar_berita

                );

                // Update data pelanggan di database melalui model
                $this->M_berita->edit_coba_berita($id_berita, $data_pelanggan);
            } else {
                // Jika upload foto gagal
                $error = $this->upload->display_errors();
                // Tampilkan pesan error
                echo $error;
                // Hentikan eksekusi
                return;
            }
        } else {
            // Jika tidak ada file gambar_berita yang diunggah
            // Data pelanggan yang akan diupdate di database
            $data_pelanggan = array(
                'tanggal' => $tanggal,
                'keterangan' => $keterangan,

            );

            // Update data pelanggan di database melalui model
            $this->M_berita->edit_coba_berita($id_berita, $data_pelanggan);
        }

        // Redirect atau tampilkan pesan sukses
        redirect('index.php/admin/C_admin/berita');
    }
}
