<?php
/**
 * Model CRUD User Management
 */
class M_cetak extends CI_Model{
  //read data dari tabel mahasiswa, jurusan, bintalwaka. 
  function read()
  {
     
  }

  // read berdasarkan id
  function readBy($id)
  {
    $this->db->select('tm.*');
    $this->db->from('t_mahasiswa tm');
    return $this->db->where('nim',$id)->get();
  }

  //delete 
  function delete($id)
  {
    
  }

  //create
  function create($data)
  {

  }

  //Edit
  function update($id,$data)
  {
    
  }

}

?>
