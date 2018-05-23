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
                    "<button class=\"btn btn-primary btn-sm\" onclick=\"editkel(".$r->id_kelompok.",'".$r->nama_kelompok."')\">EDIT</button> <button class=\"btn btn-danger btn-sm\" onclick=\"hapuskel(".$r->id_kelompok.")\">DELETE</button>"
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
        $nama = $this->input->post('kelompok');

        $data = array('nama_kelompok' => $nama);
        $this->m_kelompok->create($data);
        header("location: ".base_url('admin/bintalwaka'));

    }

    public function coba()
    {
        echo "Helo";
    }

    public function update()
    {
        $id = $this->input->post('id-kelompok-edit');
        $nama = $this->input->post('kelompok-edit');

        $data = array('nama_kelompok' => $nama);
        $this->m_kelompok->update($id,$data);
        header("location: ".base_url('admin/bintalwaka'));
    }

    public function delete($id)
    {
        $this->m_kelompok->delete($id);
        header("location: ".base_url('admin/bintalwaka'));
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