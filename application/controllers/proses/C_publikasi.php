<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_publikasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
			redirect(base_url(""));
		}
        $this->load->model('M_berkas');
        $this->load->library('upload');
    }

    public function tambah_berkas() {
        // Konfigurasi upload file
        $config['upload_path'] = './berkas/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 102400; // 100MB (100000KB)
 // Generate unique filename

        $this->upload->initialize($config);

        if ($this->upload->do_upload('berkas_file')) {
            // Jika upload file PDF berhasil
            $upload_data = $this->upload->data();
            $berkas_file = $upload_data['file_name'];

            // Data berkas yang akan disimpan ke database
            $data_berkas = array(
                'berkas_file' => $berkas_file
            );
            
            $this->M_berkas->tambah_berkas($data_berkas, 'berkas');

            // Redirect atau tampilkan pesan sukses
            redirect('index.php/admin/C_admin');
        } else {
            // Jika upload file gagal
            $error = $this->upload->display_errors();
            // Tampilkan pesan error
            echo $error;
        }
    }
}
