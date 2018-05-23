<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->template->load('template/admin', 'content/dashboard');
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
		// $data['mahasiswa'] = $this->m_mahasiswa->read_gab()->result();
		$this->template->load('template/admin', 'content/a_mahasiswa');
	}

	public function mahasiswa_edit($nim)
	{
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
