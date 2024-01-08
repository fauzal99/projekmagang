<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{



	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_berkas');
		$this->load->library('upload');
		$this->load->model('M_berita');
		$this->load->model('M_album');
	}
	public function index()
	{
		$data['berita'] = $this->M_berita->tampil_data();
		$data['album'] = $this->M_album->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}
	public function kontak()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('kontak');
		$this->load->view('templates/footer');
	}
	public function d_bersinar()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('d_bersinar');
		$this->load->view('templates/footer');
	}
	public function k_madani()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('k_madani');
		$this->load->view('templates/footer');
	}
	public function b_mediasi()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('b_mediasi');
		$this->load->view('templates/footer');
	}
	public function s_perjumpaan()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('s_perjumpaan');
		$this->load->view('templates/footer');
	}
	public function p_ppid()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('p_ppid');
		$this->load->view('templates/footer');
	}
	public function vm_ppid()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('vm_ppid');
		$this->load->view('templates/footer');
	}
	public function m_pelayanan()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('m_pelayanan');
		$this->load->view('templates/footer');
	}
	public function tf_ppid()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('tf_ppid');
		$this->load->view('templates/footer');
	}
	public function sop()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('sop');
		$this->load->view('templates/footer');
	}
	public function a_foto()
	{
		$data['album'] = $this->M_album->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('a_foto', $data);
		$this->load->view('templates/footer');
	}
	public function berita()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('berita');
		$this->load->view('templates/footer');
	}
	public function berita1()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('berita1');
		$this->load->view('templates/footer');
	}
	public function berita2()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('berita2');
		$this->load->view('templates/footer');
	}
	public function berita3()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('berita3');
		$this->load->view('templates/footer');
	}
	public function berita4()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('berita4');
		$this->load->view('templates/footer');
	}
	public function berita5()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('berita5');
		$this->load->view('templates/footer');
	}
	public function berita6()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('berita6');
		$this->load->view('templates/footer');
	}
	public function berita7()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('berita7');
		$this->load->view('templates/footer');
	}
	public function v_misi()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('v_misi');
		$this->load->view('templates/footer');
	}
	public function d_tupoksi()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('d_tupoksi');
		$this->load->view('templates/footer');
	}
	public function p_informasi()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('p_informasi');
		$this->load->view('templates/footer');
	}
	public function tc_pengaduan()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('tc_pengaduan');
		$this->load->view('templates/footer');
	}
	public function sejarah()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('sejarah');
		$this->load->view('templates/footer');
	}
	public function publikasi()
	{


		$data['berkas'] = $this->M_berkas->tampil_data();
		$this->load->view('templates/ahead');
		$this->load->view('templates/topbar');
		$this->load->view('publikasi', $data);
		$this->load->view('templates/afoot');
	}

	public function hapus_berkas($id_berkas)
	{

		$this->M_berkas->hapus_berkas($id_berkas, 'berkas');

		redirect('index.php/admin/C_admin');
	}
	public function s_organisasi()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('s_organisasi');
		$this->load->view('templates/footer');
	}
}
