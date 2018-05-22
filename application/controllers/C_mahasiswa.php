<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_mahasiswa extends CI_Controller {
    //read dg output json
    public function read()
    {
        $data = $this->m_mahasiswa->read_gab();
        $this->jsonformatter(false,'berhasil',$data->result(),200);
    }

    // read untuk tampil ke datatable mahasiswa
    public function read2()
    {
        // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $fetch = $this->m_mahasiswa->read_gab();

          $data = array();

          foreach($fetch->result() as $r) {

               $data[] = array(
                    $r->nim,
                    $r->nama_lengkap,
                    $r->nama_jurusan,
                    $r->no_HP,
                    "<button class=\"btn btn-primary btn-sm\" onclick=\"editmhs(".$r->nim.")\">EDIT</button> <button class=\"btn btn-danger btn-sm\" onclick=\"hapusmhs(".$r->nim.")\">DELETE</button>"
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $fetch->num_rows(),
                 "recordsFiltered" => $fetch->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
    }

    //read nim mahasiswa
    public function read3()
    {
        $nim = $this->input->post("nim");
        $data = $this->m_mahasiswa->readBy($nim);
        if ($data->num_rows() > 0) {
            $this->jsonformatter(false,'berhasil',$data->result(),200);
        } else {
            $this->jsonformatter(false,'kosong',$data->result(),200);
        }        
    }

    //insert mahasiswa ke database
    public function create()
    {
        $nim = $this->input->post('nim');
        $nl = $this->input->post('nl');
        $np = $this->input->post('np');
        $jk = $this->input->post('jk');
        $tempat = $this->input->post('tempat');
        $tgl = $this->input->post('tgl');
        $fakultas = $this->input->post('fakultas');
        $jurusan = $this->input->post('jurusan');
        $hobi = $this->input->post('hobi');
        $noHp = $this->input->post('no-hp');
        $alamat = $this->input->post('alamat');
        $rpendidikan = $this->input->post('riwayat_pendidikan');
        $rpenyakit = $this->input->post('riwayat_penyakit');
        $prestasi = $this->input->post('prestasi');
        $motivasi = $this->input->post('motivasi');

        $data = array('nim' => $nim,
                       'nama_lengkap' => $nl,
                       'nama_panggilan' => $np,
                       'jenis_kelamin' => $jk,
                       'tempat' => $tempat,
                       'tanggal_lahir' => $tgl,
                       'id_jurusan' => $jurusan,
                       'alamat' => $alamat,
                       'no_HP' => $noHp,
                       'hobi' => $hobi,
                       'riwayat_pendidikan' => $rpendidikan,
                       'prestasi' => $prestasi,
                       'riwayat_penyakit' => $rpenyakit,
                       'motivasi' => $motivasi
                    );
        
        $insert = $this->m_mahasiswa->create($data);
        if ($insert > 0 ) {
            $this->jsonformatter(false,'sukses','',200);
        } else {
            $this->jsonformatter(false,'gagal','',200);
        }
        //header("location: ".base_url('pendaftaran'));
    }

    public function update()
    {
        $nim = $this->input->post('nim');
        $nl = $this->input->post('nl');
        $np = $this->input->post('np');
        $jk = $this->input->post('jk');
        $tempat = $this->input->post('tempat');
        $tgl = $this->input->post('tgl');
        $fakultas = $this->input->post('fakultas');
        $jurusan = $this->input->post('jurusan');
        $hobi = $this->input->post('hobi');
        $noHp = $this->input->post('no-hp');
        $alamat = $this->input->post('alamat');
        $rpendidikan = $this->input->post('riwayat_pendidikan');
        $rpenyakit = $this->input->post('riwayat_penyakit');
        $prestasi = $this->input->post('prestasi');
        $motivasi = $this->input->post('motivasi');

        $data = array( 'nama_lengkap' => $nl,
                       'nama_panggilan' => $np,
                       'jenis_kelamin' => $jk,
                       'tempat' => $tempat,
                       'tanggal_lahir' => $tgl,
                       'id_jurusan' => $jurusan,
                       'alamat' => $alamat,
                       'no_HP' => $noHp,
                       'hobi' => $hobi,
                       'riwayat_pendidikan' => $rpendidikan,
                       'prestasi' => $prestasi,
                       'riwayat_penyakit' => $rpenyakit,
                       'motivasi' => $motivasi
                    );
        $this->m_mahasiswa->update($nim,$data);
        header("location: ".base_url('admin/mahasiswa'));
    }

    public function delete()
    {
        $nim = $this->input->post('nim');
        $del = $this->m_mahasiswa->delete($nim);
        if ($del > 0 ) {
            $this->jsonformatter(false,'sukses','',200);
        } else {
            $this->jsonformatter(false,'gagal','',200);
        }
        //header("location: ".base_url('admin/mahasiswa'));
    }

    //JSON Formatter
	public function jsonformatter($error,$msg,$data,$code=200)
	{
		$json['error'] = $error;
        $json['message'] = $msg;
		$json['mhs'] = $data;
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header($code)
            ->set_output(json_encode($json));
    }
    
}


?>