<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_berita extends CI_Controller {

    public function read()
    {
        echo 'Helloo';
    }

    public function readBy($id)
    {
        echo 'Helloo '.$id;
    }

    public function create()
    {
        $tanggal = $this->input->post('tgl');
        $user = $this->input->post('user');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

        $data = array('judul' => $judul,
                       'slug' => $isi,
                       'isi' => $isi,
                       'tanggal' => $tgl,
                       'id_user' => $user);
        $this->m_berita->create($data);
        header("location: ".base_url('admin/berita'));

    }

    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tgl');
        $user = $this->input->post('user');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

        $data = array('judul' => $judul,
                       'slug' => $isi,
                       'isi' => $isi,
                       'tanggal' => $tgl,
                       'id_user' => $user);
        $this->m_berita->update($id,$data);
        header("location: ".base_url('admin/berita'));
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $del = $this->m_berita->delete($id);
        if ($del > 0) {
            $this->jsonformatter(200,'sukses','');
        } else {
            $this->jsonformatter(200,'gagal','');
        }
        
        // header("location: ".base_url('admin/berita'));
    }

    //JSON Formatter
	public function jsonformatter($error,$msg,$data)
	{
		$json['error'] = $error;
        $json['message'] = $msg;
		$json['berita'] = $data;
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json));
    }
    
}


?>