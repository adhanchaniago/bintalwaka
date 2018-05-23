<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['berita'] = $this->m_berita->read()->result();
		$this->template->load('template/home', 'content/berita', $data);
		// $this->load->view('template/home');
	}

	public function berita($id)
	{
		$data['berita'] = $this->m_berita->readBy($id)->result();
		$this->template->load('template/home', 'content/berita_baca', $data);
	}

	public function foto()
	{
		$this->template->load('template/home','content/foto');
	}

	public function video()
	{
		$this->template->load('template/home','content/video');
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

	public function coba()
	{
		$data = $this->m_berita->read()->result();
		$this->jsonformatter(false,'berhasil',$data);
	}
}
