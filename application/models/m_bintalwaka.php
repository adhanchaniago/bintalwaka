<?php
/**
 * Model CRUD User Management
 */
class M_bintalwaka extends CI_Model{
  //read data dari tabel mahasiswa, jurusan, bintalwaka. 
  function read()
  {
      $this->db->select('tb.*,tk.nama_kelompok');
      $this->db->from('t_bintalwaka tb');
      $this->db->join('t_kelompok tk','tk.id_kelompok=tb.id_kelompok','inner');
      return $this->db->order_by('id_bintalwaka','ASC')->get();
  }

  // read berdasarkan id
  function readBy($nim)
  {
    return $this->db->get_where('t_bintalwaka', array('nim' => $nim));
  }

  //hapus data bintalwaka
  function delete($id)
  {
    $where = array('id_bintalwaka' => $id);
    $this->db->where($where);
    $this->db->delete('t_bintalwaka');
    return $this->db->affected_rows();
  }

  //insert data bintalwaka
  function create($data)
  {
    $this->db->insert('t_bintalawaka',$data);
  }

  //update berdasarkan id bintalwaka
  function update($id,$data)
  {
    $where = array('id_bintalwaka' => $id);
    $this->db->where($where);
    $this->db->update('t_bintalwaka',$data);
  }

}

?>
