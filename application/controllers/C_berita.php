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

    public function create($image)
    {   
        $tanggal = $this->input->post('tgl');
        $user = $this->input->post('user');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

        $data = array('judul' => $judul,
                       'slug' => $isi,
                       'isi' => $isi,
                       'image' => $image,
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
            $this->jsonformatter(false,'sukses','');
        } else {
            $this->jsonformatter(false,'gagal','');
        }
        
        // header("location: ".base_url('admin/berita'));
    }

    public function do_upload()
    {
        $nama_file                      = "image_".rand(100,999).".jpg";
        $config['file_name']            = $nama_file;
        $config['upload_path']          = './assets/image/berita/';
        $config['allowed_types']        = 'jpg';
        $config['max_size']             = 2048;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('banner')) {
            $this->jsonformatter(true,'gagal','');
            // die();
        } else {
            $this->jsonformatter(false,'sukses','');
            $this->create($nama_file);
        }
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