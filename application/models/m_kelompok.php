<?php
/**
 * Model CRUD User Management
 */
class M_kelompok extends CI_Model{
  //read data dari tabel mahasiswa, jurusan, bintalwaka. 
  function read()
  {
      return $this->db->get('t_kelompok');
  }

  // read berdasarkan id
  function readBy($id)
  {
    return $this->db->get_where('t_kelompok', array('id_kelompok' => $id));
  }

  //hapus kelompok
  function delete($id)
  {
    $where = array('id_kelompok' => $id);
    $this->db->where($where);
    $this->db->delete('t_kelompok');
  }

  //buat kelompok baru
  function create($data)
  {
    $this->db->insert('t_kelompok',$data);
  }

  //update kelompok
  function update($id,$data)
  {
    $where = array('id_kelompok' => $id);    
    $this->db->where($where);
    $this->db->update('t_kelompok',$data);
  }

}

?>
