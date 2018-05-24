<?php
/**
 * Model CRUD User Management
 */
class M_cetak extends CI_Model{
  //read data dari tabel mahasiswa, jurusan, bintalwaka. 
  function read($nim)
  {
    $date = "DATE_FORMAT(tb.tanggal, '%d %M %Y') AS tanggalbintalwaka";
     $this->db->select('tm.*,tb.*,'.$date.',tk.nama_kelompok');
     $this->db->from('t_mahasiswa tm');
     $this->db->join('t_bintalwaka tb','tb.tahun=tm.tahun_bintalwaka','inner');
     $this->db->join('t_kelompok tk','tk.id_kelompok=tm.id_kelompok','inner');
     return $this->db->where('nim', $nim)->get();
  }

  // read berdasarkan id
  function readBy($id)
  {
    
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
