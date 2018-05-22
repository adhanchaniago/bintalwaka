<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function index()
	{
		$this->template->load('template/home', 'content/pendaftaran');
	}

	public function daftar()
	{
		$data['fakultas'] = $this->m_mahasiswa->read_fak()->result();
		// $data['jurusan'] = $this->m_mahasiswa->read_jur()->result();
		$this->template->load('template/home', 'content/form',$data);
	}

	//read data jurusan dari id fakultas
	public function jurusan()
	{
		$id = intval($this->input->post('id'));
		$data = $this->m_mahasiswa->read_jur($id)->result();
		$this->jsonformatter(false,'berhasil',$data);
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
