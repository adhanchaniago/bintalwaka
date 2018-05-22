<?php
/**
 * Model CRUD User Management
 */
class M_berita extends CI_Model{
  //read all 
  function read()
  {
      return $this->db->order_by('id_berita', 'DESC')->get('t_berita');
  }

  function jumlah_berita()
  {
      return $this->db->get('t_berita')->num_rows();
  }

  // read berdasarkan id
  function readBy($id)
  {
    return $this->db->get_where('t_berita', array('id_berita' => $id));
  }

  //insert berita
  function create($data)
  {
    $this->db->insert('t_berita',$data);
  }

  //hapus berita
  function delete($id)
  {
    $where = array('id_berita' => $id);
    $this->db->where($where);
    $this->db->delete('t_berita');
    return $this->db->affected_rows();
  }

  //update berita
  function update($id,$data)
  {
    $where = array('id_berita' => $id);
    $this->db->where($where);
    $this->db->update('t_berita',$data);
  }

}

?>
