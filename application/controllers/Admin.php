<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// jika status != login > redirect login
		if ($this->session->userdata('status') != 'login') {
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$tahun = date('Y');
		$data['jml_pendaftar'] = $this->m_mahasiswa->count_pendaftar($tahun);
		$data['jml_allpendaftar'] = $this->m_mahasiswa->count_allpendaftar();
		$data['jml_lunas'] = $this->m_mahasiswa->count_lunas($tahun);
		$data['jml_belumlunas'] = $this->m_mahasiswa->count_belumlunas($tahun);
		$this->template->load('template/admin', 'content/dashboard',$data);
	}

	public function berita()
	{
		$data['berita'] = $this->m_berita->read()->result();
		$this->template->load('template/admin', 'content/a_berita',$data);
	}

	public function berita_tambah()
	{
		$this->template->load('template/admin', 'content/a_berita_tambah');
	}

	public function berita_edit($id)
	{
		$data['berita'] = $this->m_berita->readBy($id)->result();
		$this->template->load('template/admin', 'content/a_berita_edit',$data);
	}

	public function mahasiswa()
	{
		$data['tahun'] = $this->m_bintalwaka->readtahun()->result();		
		$data['fakultas'] = $this->m_bintalwaka->readfakultas()->result();	
		// $data['mahasiswa'] = $this->m_mahasiswa->read_gab()->result();
		$this->template->load('template/admin', 'content/a_mahasiswa',$data);
	}

	public function mahasiswa_edit($nim)
	{
		$data['bintalwaka'] = $this->m_bintalwaka->read()->result();
		$data['kelompok'] = $this->m_kelompok->read()->result();
		$data['mahasiswa'] = $this->m_mahasiswa->readBy($nim)->result();		
		$this->template->load('template/admin', 'content/a_mahasiswa_edit',$data);
	}

	public function bintalwaka()
	{
		$this->template->load('template/admin', 'content/a_bintalwaka');
	}

	public function kelompok()
	{
		$data['kelompok'] = $this->m_mahasiswa->read()->result();		
		$this->template->load('template/admin', 'content/a_kelompok');
	}

	public function kelompok_edit($id)
	{
		$data['kelompok'] = $this->m_mahasiswa->readBy($id)->result();		
		$this->template->load('template/admin', 'content/a_kelompok');
	}

	public function user()
	{
		$this->template->load('template/admin', 'content/a_user');
	}

	public function cetak()
	{
		$data['tahun'] = $this->m_bintalwaka->readtahun()->result();		
		$data['kelompok'] = $this->m_bintalwaka->readkelompok()->result();		
		$data['fakultas'] = $this->m_bintalwaka->readfakultas()->result();		
		$this->template->load('template/admin', 'content/a_cetak',$data);
	}

	public function jsonformatter($error,$msg,$data)
	{
		$json['error'] = $error;
        $json['message'] = $msg;
		$json['berita'] = $data;
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($json));
	}

	
}
