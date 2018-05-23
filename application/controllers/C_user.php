<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_user extends CI_Controller {

    public function read()
    {
        $data = $this->m_user->read();
        $this->jsonformatter(false,'berhasil',$data->result(),200);
    }

    public function read2()
    {
        // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $fetch = $this->m_user->read();

          $data = array();

          foreach($fetch->result() as $r) {

               $data[] = array(
                    $r->id_user,
                    $r->username,
                    "<button class=\"btn btn-primary btn-sm\" onclick=\"edituser(".$r->id_user.",'".$r->username."','".$r->password."')\">EDIT</button> <button class=\"btn btn-danger btn-sm\" onclick=\"hapususer(".$r->id_user.")\">DELETE</button>"
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
        $username = $this->input->post('user');
        $pass = $this->input->post('pass');

        $data = array('username' => $username,
                       'password' => $pass);
        $this->m_user->create($data);
        header("location: ".base_url('admin/user'));
    }

    public function update()
    {
        $id = $this->input->post('id-user-edit');
        $username = $this->input->post('user-edit');
        $pass = $this->input->post('pass-edit');

        $data = array('username' => $username,
                        'password' => $pass);
        $this->m_user->update($id,$data);
        header("location: ".base_url('admin/user'));
    }

    public function delete()
    {   
        $id = $this->input->post('id');
        
        $del = $this->m_user->delete($id);
        if ($del > 0) {
            $this->jsonformatter(false,'sukses','');
        } else {
            $this->jsonformatter(false,'gagal','');
        }
        // header("location: ".base_url('admin/user'));
    }

    //JSON Formatter
	public function jsonformatter($error,$msg,$data)
	{
		$json['error'] = $error;
        $json['message'] = $msg;
		$json['user'] = $data;
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json));
    }
    
}


?>