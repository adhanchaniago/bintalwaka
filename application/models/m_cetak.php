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

  public function absensi($filter,$tahun,$param="")
  {
    if ($filter == "kelompok") {
      $this->db->select('t_mahasiswa.tahun_bintalwaka, t_mahasiswa.nim, t_mahasiswa.nama_lengkap, t_jurusan.nama_jurusan, t_mahasiswa.no_hp, t_kelompok.nama_kelompok');
      $this->db->from('t_mahasiswa');
      $this->db->join('t_kelompok', 't_mahasiswa.id_kelompok = t_kelompok.id_kelompok', 'inner');
      $this->db->join('t_jurusan', 't_mahasiswa.id_jurusan = t_jurusan.id_jurusan', 'inner');
      $this->db->where('t_mahasiswa.tahun_bintalwaka', $tahun);
      $this->db->where('t_kelompok.id_kelompok', $param);
      return $this->db->get();
    } elseif ($filter == "fakultas") {
      $this->db->select('t_mahasiswa.tahun_bintalwaka, t_mahasiswa.nim, t_mahasiswa.nama_lengkap, t_jurusan.nama_jurusan, t_mahasiswa.no_hp, t_kelompok.nama_kelompok, t_fakultas.nama_fakultas');
      $this->db->from('t_mahasiswa');
      $this->db->join('t_kelompok', 't_mahasiswa.id_kelompok = t_kelompok.id_kelompok', 'inner');
      $this->db->join('t_jurusan', 't_mahasiswa.id_jurusan = t_jurusan.id_jurusan', 'inner');
      $this->db->join('t_fakultas', 't_jurusan.id_fakultas = t_fakultas.id_fakultas', 'inner');
      $this->db->where('t_mahasiswa.tahun_bintalwaka', $tahun);
      $this->db->where('t_fakultas.id_fakultas', $param);
      return $this->db->get();
    } elseif ($filter == "semua") {
      $this->db->select('t_mahasiswa.nim, t_mahasiswa.nama_lengkap, t_jurusan.nama_jurusan, t_mahasiswa.no_hp, t_kelompok.nama_kelompok');
      $this->db->from('t_mahasiswa');
      $this->db->join('t_kelompok', 't_mahasiswa.id_kelompok = t_kelompok.id_kelompok', 'inner');
      $this->db->join('t_jurusan', 't_mahasiswa.id_jurusan = t_jurusan.id_jurusan', 'inner');
      $this->db->where('t_mahasiswa.tahun_bintalwaka', $tahun);
      $this->db->order_by('t_kelompok.nama_kelompok', 'asc');
      return $this->db->get();
    }
  }

  public function idcard($filter,$tahun,$param="")
  {
    if ($filter == 'kelompok') {
      $date = "DATE_FORMAT(t_bintalwaka.tanggal, '%d %M %Y') AS tanggalbintalwaka";
      $this->db->select('t_mahasiswa.*,t_bintalwaka.*,'.$date.',t_kelompok.*');
      $this->db->from('t_mahasiswa');
      $this->db->join('t_kelompok', 't_mahasiswa.id_kelompok = t_kelompok.id_kelompok', 'inner');
      $this->db->join('t_bintalwaka', 't_mahasiswa.tahun_bintalwaka = t_bintalwaka.tahun', 'inner');
      $this->db->where('t_mahasiswa.tahun_bintalwaka', $tahun);
      $this->db->where('t_kelompok.id_kelompok', $param);
      return $this->db->get();

    } elseif ($filter == 'fakultas') {
      $date = "DATE_FORMAT(t_bintalwaka.tanggal, '%d %M %Y') AS tanggalbintalwaka";
      $this->db->select('t_mahasiswa.*,t_bintalwaka.*,'.$date.',t_kelompok.*');
      $this->db->from('t_mahasiswa');
      $this->db->join('t_kelompok', 't_mahasiswa.id_kelompok = t_kelompok.id_kelompok', 'inner');
      $this->db->join('t_bintalwaka', 't_mahasiswa.tahun_bintalwaka = t_bintalwaka.tahun', 'inner');
      $this->db->join('t_jurusan', 't_mahasiswa.id_jurusan = t_jurusan.id_jurusan', 'inner');
      $this->db->join('t_fakultas', 't_jurusan.id_fakultas = t_fakultas.id_fakultas', 'inner');
      $this->db->where('t_mahasiswa.tahun_bintalwaka', $tahun);
      $this->db->where('t_fakultas.id_fakultas', $param);
      return $this->db->get();

    }
    
  }

  public function sertifikat($filter,$tahun,$param="")
  {
    if ($filter == 'kelompok') {
      $date = "DATE_FORMAT(t_bintalwaka.tanggal, '%d %M %Y') AS tanggalbintalwaka";
      $this->db->select('t_mahasiswa.*,t_bintalwaka.*,'.$date.',t_kelompok.*');
      $this->db->from('t_mahasiswa');
      $this->db->join('t_kelompok', 't_mahasiswa.id_kelompok = t_kelompok.id_kelompok', 'inner');
      $this->db->join('t_bintalwaka', 't_mahasiswa.tahun_bintalwaka = t_bintalwaka.tahun', 'inner');
      $this->db->where('t_mahasiswa.tahun_bintalwaka', $tahun);
      $this->db->where('t_kelompok.id_kelompok', $param);
      return $this->db->get();

    } elseif ($filter == 'fakultas') {
      $date = "DATE_FORMAT(t_bintalwaka.tanggal, '%d %M %Y') AS tanggalbintalwaka";
      $this->db->select('t_mahasiswa.*,t_bintalwaka.*,'.$date.',t_kelompok.*');
      $this->db->from('t_mahasiswa');
      $this->db->join('t_kelompok', 't_mahasiswa.id_kelompok = t_kelompok.id_kelompok', 'inner');
      $this->db->join('t_bintalwaka', 't_mahasiswa.tahun_bintalwaka = t_bintalwaka.tahun', 'inner');
      $this->db->join('t_jurusan', 't_mahasiswa.id_jurusan = t_jurusan.id_jurusan', 'inner');
      $this->db->join('t_fakultas', 't_jurusan.id_fakultas = t_fakultas.id_fakultas', 'inner');
      $this->db->where('t_mahasiswa.tahun_bintalwaka', $tahun);
      $this->db->where('t_fakultas.id_fakultas', $param);
      return $this->db->get();
    }
  }


}

?>
