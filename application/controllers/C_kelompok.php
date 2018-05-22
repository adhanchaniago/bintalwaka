<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_kelompok extends CI_Controller {

    public function read()
    {
        $data = $this->m_kelompok->read();
        $this->jsonformatter(false,'berhasil',$data->result(),200);
    }

    public function read2()
    {
        // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $fetch = $this->m_kelompok->read();

          $data = array();

          foreach($fetch->result() as $r) {

               $data[] = array(
                    $r->id_kelompok,
                    $r->nama_kelompok,
                    "<button class=\"btn btn-primary btn-sm\">EDIT</button> <button class=\"btn btn-danger btn-sm\">DELETE</button>"
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $fetch->num_rows(),
                 "recordsFiltered" => $fetch->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
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
        echo 'Helloo';
    }

    public function delete()
    {
        echo 'Helloo';
    }

    //JSON Formatter
	public function jsonformatter($error,$msg,$data,$code=200)
	{
		$json['error'] = $error;
        $json['message'] = $msg;
		$json['mhs'] = $data;
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header($code)
            ->set_output(json_encode($json));
    }
    
}


?>