<?php
/**
 * Model CRUD User Management
 */
class M_berita extends CI_Model{
  //read all 
  function read()
  {
    $this->db->select('t_berita.*,t_user.username');
    $this->db->from('t_berita');
    $this->db->join('t_user','t_user.id_user=t_berita.id_user','inner');
    return $this->db->order_by('id_berita', 'DESC')->get();
  }

  function jumlah_berita()
  {
      return $this->db->get('t_berita')->num_rows();
  }

  // read berdasarkan id
  function readBy($id)
  {
    $this->db->select('t_berita.*,t_user.username');
    $this->db->from('t_berita');
    $this->db->join('t_user','t_user.id_user=t_berita.id_user','inner');
    return $this->db->where('id_berita', $id)->get();
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
