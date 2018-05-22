<?php
/**
 * Model CRUD User Management
 */
class M_user extends CI_Model{
  //read data dari tabel mahasiswa, jurusan, bintalwaka. 
  function read()
  {
      $this->db->select('tu.id_user,tu.username');
      $this->db->from('t_user tu');
      return $this->db->get();
  }

  // read berdasarkan id
  function readBy($id)
  {
    return $this->db->get_where('t_user', array('id_user' => $id));
  }

  //delete user
  function delete($id)
  {
    $where = array('id_user' => $id);
    $this->db->where($where);
    $this->db->delete('t_user');
    return $this->db->affected_rows();
  }

  // buat user baru
  function create($data)
  {
    $this->db->insert('t_user',$data);
  }

  // edit data user
  function update($id,$data)
  {
    $where = array('id_user' => $id);
    $this->db->where($where);
    $this->db->update('t_user',$data);
  }

}

?>
