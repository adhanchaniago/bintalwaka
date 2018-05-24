<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_bintalwaka extends CI_Controller {

    public function read()
    {
        $data = $this->m_bintalwaka->read();
        $this->jsonformatter(false,'berhasil',$data->result(),200);
    }

    public function read2()
    {
        // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $fetch = $this->m_bintalwaka->read();

          $data = array();

          foreach($fetch->result() as $r) {

               $data[] = array(
                    $r->tahun,
                    $r->tanggal,
                    $r->lokasi,
                    $r->tema,
                    "<button class=\"btn btn-primary btn-sm\" onclick=\"editbintalwaka(".$r->tahun.")\">EDIT</button> <button class=\"btn btn-danger btn-sm\" onclick=\"hapusbintalwaka(".$r->tahun.")\">DELETE</button>"
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

    public function readBy()
    {
        $tahun = $this->input->post('tahun');
        $data = $this->m_bintalwaka->readBy($tahun);
        $this->jsonformatter(false,'berhasil',$data->result(),200);
    }

    public function create()
    {
        $nim = $this->input->post('tahun');
        $tanggal = $this->input->post('tanggal');
        $lokasi = $this->input->post('lokasi');
        $tema = $this->input->post('tema');

        $data = array('tahun' => $nim,
                       'tanggal' => $tanggal,
                       'tema' => $tema,
                       'lokasi' => $lokasi);
        $this->m_bintalwaka->create($data);
        header("location: ".base_url('admin/bintalwaka'));
    }

    public function update()
    {
        $tahun = $this->input->post('tahun');
        $tanggal = $this->input->post('tanggal');
        $tema = $this->input->post('tema');
        $tahun = $this->input->post('tahun');
        $lokasi = $this->input->post('lokasi');

        $data = array( 'tema' => $tema,
                       'tanggal' => $tanggal,
                       'tahun' => $tahun,
                       'lokasi' => $lokasi);
        $this->m_bintalwaka->update($tahun,$data);
        header("location: ".base_url('admin/bintalwaka'));
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $del = $this->m_bintalwaka->delete($id);
        if ($del > 0) {
            $this->jsonformatter(false,'sukses','');
        } else {
            $this->jsonformatter(false,'gagal','');
        }
        // header("location: ".base_url('admin/bintalwaka'));
    }

    //JSON Formatter
	public function jsonformatter($error,$msg,$data)
	{
		$json['error'] = $error;
        $json['message'] = $msg;
		$json['mhs'] = $data;
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json));
    }
    
}


?>