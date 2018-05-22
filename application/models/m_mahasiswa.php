<?php
/**
 * Model CRUD User Management
 */
class M_mahasiswa extends CI_Model{
  //read data dari tabel mahasiswa, jurusan, bintalwaka. 
  function read_gab()
  {
      $this->db->select('tm.nim,tm.nama_lengkap,tj.nama_jurusan,tm.no_HP');
      $this->db->from('t_mahasiswa tm');
      $this->db->join('t_jurusan tj','tj.id_jurusan=tm.id_jurusan','inner');
      return $this->db->get();
  }

  // read berdasarkan nim
  function readBy($nim)
  {
    $date = "DATE_FORMAT(tm.tanggal_lahir, '%d %M %Y') AS tanggal";
    $this->db->select('tm.*,'.$date.',tj.nama_jurusan AS jurusan,tf.nama_fakultas AS fakultas');
    $this->db->from('t_mahasiswa tm');
    $this->db->join('t_jurusan tj','tj.id_jurusan=tm.id_jurusan','inner');
    $this->db->join('t_fakultas tf','tf.id_fakultas=tj.id_fakultas','inner');
    $this->db->where('tm.nim',$nim);
    return $this->db->get();
  }

  // read data fakultas
  public function read_fak()
  {
    return $this->db->get('t_fakultas');
  }

  // read data jurusan
  public function read_jur($id)
  {
    return $this->db->get_where('t_jurusan',array('id_fakultas' => $id));
  }

  function create($data)
  {
    $this->db->insert('t_mahasiswa',$data);
    return $this->db->affected_rows();
  }

  //hapus mahasiswa berdasarkan nim
  function delete($nim)
  {
    $where = array('nim' => $nim);
    $this->db->where($where);
    $this->db->delete('t_mahasiswa');
    return $this->db->affected_rows();
  }
  
  //update mahasiswa berdasarkan nim
  function update($nim,$data)
  {
    $where = array('nim' => $nim);
    $this->db->where($where);
    $this->db->update('t_mahasiswa',$data);
  }

}

?>
