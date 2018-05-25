<?php
/**
 * Model CRUD User Management
 */
class M_login extends CI_Model{
  //read data dari tabel mahasiswa, jurusan, bintalwaka. 
  function cek_login($user,$pass)
  {
    // return $this->db->get_where($table,$where);
    // $this->db->select('username');
    // $this->db->where('username',$user);
    // $this->db->where('password',$pass);
    return $this->db->get_where('t_user',array('username' => $user,'password' => $pass));
  }

}

?>
