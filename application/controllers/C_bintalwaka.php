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
                    $r->id_bintalwaka,
                    $r->nim,
                    $r->nama_kelompok,
                    $r->tanggal,
                    $r->tahun,
                    $r->lokasi,
                    "<button class=\"btn btn-primary btn-sm\" onclick=\"editbintalwaka(".$r->id_bintalwaka.")\">EDIT</button> <button class=\"btn btn-danger btn-sm\" onclick=\"hapusbintalwaka(".$r->id_bintalwaka.")\">DELETE</button>"
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
        $nim = $this->input->post('nim');
        $kelompok = $this->input->post('kelompok');
        $tanggal = $this->input->post('tanggal');
        $tahun = $this->input->post('tahun');
        $lokasi = $this->input->post('lokasi');

        $data = array('nim' => $nim,
                       'id_kelompok' => $kelompok,
                       'tanggal' => $tanggal,
                       'tahun' => $tahun,
                       'lokasi' => $lokasi);
        $this->m_bintalwaka->create($data);
        header("location: ".base_url('admin/bintalwaka'));
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nim = $this->input->post('nim');
        $kelompok = $this->input->post('kelompok');
        $tanggal = $this->input->post('tanggal');
        $tahun = $this->input->post('tahun');
        $lokasi = $this->input->post('lokasi');

        $data = array('nim' => $nim,
                       'id_kelompok' => $kelompok,
                       'tanggal' => $tanggal,
                       'tahun' => $tahun,
                       'lokasi' => $lokasi);
        $this->m_bintalwaka->update($id,$data);
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