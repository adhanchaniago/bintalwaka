<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_cetak extends CI_Controller {

    public function read($nim)
    {
        // $nim = $this->input->post('nim');
        $data = $this->m_cetak->read($nim);
        $this->jsonformatter(false,'berhasil',$data->result(),200);
    }

    public function sertifikat()
    {
        $nim = $this->input->post('nim');
        $mhs = $this->m_cetak->read($nim)->result();
        $base = base_url('assets/image/');
        $tahun = 2018;
        $pdf = new Cfpdf('L','mm','A4');
        $pdf->AddPage();
        $width = $pdf->getPageWidth();
        $pdf->SetFont('Arial','',12);
        foreach ($mhs as $m ) {
        $pdf->Cell(57,5,'PANITIA BINTALWAKA '.$m->tahun_bintalwaka,0,1);
        $pdf->Cell(70,5,'UKM KATOLIK ST. IGNATIUS LOYOLA',0,1);
        $pdf->Cell(70,5,'UNIVERSITAS MERDEKA MALANG',0,1);
        $pdf->Cell(70,8,'Jl. Terusan Dieng No.57 Malang',0,1);
        $pdf->Cell(70,2,'(Basement D3 Perbankan)',0,1);
        $pdf->setXY(($width-10)-20,8);
        $pdf->Image($base.'logoukmk.jpg',null,null,20,20,'JPG');
        $pdf->setXY(($width-10)-45,8);
        $pdf->Image($base.'logounmer.jpg',null,null,20,20,'JPG');
        
        $pdf->Ln(17);
            $pdf->SetFont('Arial','',20);
            $pdf->Cell(0,10,'SERTIFIKAT ',0,2,'C');
            $pdf->Cell(0,10,'DIBERIKAN KEPADA: ',0,1,'C');

            $pdf->Ln(3);

            $mid = $width/2;
            $p = 30;
            $x = $mid-($p/2);
            $pdf->setX($x);
            $pdf->Image($base."mahasiswa/".$m->image,null,null,30,40,'JPG');
            $pdf->setX(10);

            $pdf->SetFont('Arial','U',18);
            $pdf->Cell(0,15,$m->nama_lengkap,0,1,'C');

            $pdf->SetFont('Arial','',14);
            $pdf->Cell(0,6,'Atas Partisipasinya Sebagai PESERTA BINTALWAKA '.$m->tahun_bintalwaka,0,1,'C');
            $pdf->Cell(0,6,'di '.$m->lokasi.', tanggal '.$m->tanggalbintalwaka,0,1,'C');
            $pdf->Cell(0,6,'Dengan Tema:',0,1,'C');
            $pdf->SetFont('Arial','U',14);
            $pdf->Cell(0,6,$m->tema,0,1,'C');
            
            $pdf->Ln(10);

            $col = ($width-20)/3;
            $pdf->SetFont('Arial','',13);
            $pdf->Cell($col,6,'Koordinator FPA Katolik',0,0,'C');
            $pdf->Cell($col,6,'Ketua Pelaksana',0,0,'C');
            $pdf->Cell($col,6,'Ketua Umum UKMK',0,0,'C');

            $pdf->Ln(27);

            $pdf->SetFont('Arial','U',12);
            $pdf->Cell($col,5,'Drs. Petrus Megu, MM.',0,0,'C');
            $pdf->Cell($col,5,'Nama Ketua Pelaksana',0,0,'C');
            $pdf->Cell($col,5,'Nama Ketua Umum UKMK',0,0,'C');
            

            $pdf->Output('I',$m->nim.'_sertifikat.pdf');
        }
        
        
    }

    public function idcard()
    {
        $nim = $this->input->post('nim');
        $mhs = $this->m_cetak->read($nim)->result();

    }

    public function absensi($filter)
    {
        $tahun = $this->input->post('tahun');
        switch ($filter) {
            case 'kelompok':
                $kelompok = $this->input->post('kelompok');
                $data = $this->m_cetak->absensi($filter,$tahun,$kelompok)->result();
                $nm_kelompok = $this->m_cetak->absensi($filter,$tahun,$kelompok)->row()->nama_kelompok;
                $this->cetak_absensi($tahun,array($filter,$nm_kelompok),$data);
                break;
            case 'fakultas':
                $fakultas = $this->input->post('fakultas');
                $data = $this->m_cetak->absensi($filter,$tahun,$fakultas)->result();
                $nm_fakultas = $this->m_cetak->absensi($filter,$tahun,$fakultas)->row()->nama_fakultas;
                $this->cetak_absensi($tahun,array($filter,$nm_fakultas),$data);
                break;
            case 'semua':
                $data = $this->m_cetak->absensi($filter,$tahun,'')->result();
                $this->cetak_absensi($tahun,array($filter),$data);
                break;
            default:
                # code...
                break;
        }
    }

    public function cetak_absensi($tahun,$filter,$data)
    {
        //judul halaman
        $pdf = new Cfpdf('L','mm','A4');
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(true,1);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(0,5,'ABSENSI PERSERTA BINTALWAKA',0,1,'C');
        $pdf->Cell(0,5,'UKM KATOLIK ST. IGNATIUS LOYOLA',0,1,'C');
        $pdf->Cell(0,5,'TAHUN '.$tahun,0,1,'C');
        $pdf->Ln(10);

        $pdf->SetFont('Arial','',12);
        if ($filter[0] == "kelompok") {
            $pdf->Cell(0,10,"Kelompok : ".$filter[1],0,1);
            //header tabel
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(13,7,'No.',1,0,'C');
            $pdf->Cell(45,7,'NIM',1,0,'C');
            $pdf->Cell(60,7,'NAMA',1,0,'C');
            $pdf->Cell(60,7,'JURUSAN',1,0,'C');
            $pdf->Cell(50,7,'NO. HP',1,0,'C');
            $pdf->Cell(0,7,'TTD',1,1,'C');
            
            //body tabel
            $pdf->SetFont('Arial','',12);
            $a = 1;
            foreach ($data as $d) {
                $pdf->Cell(13,10,$a,1,0,'C');
                $pdf->Cell(45,10,$d->nim,1,0,'C');
                $pdf->Cell(60,10,$d->nama_lengkap,1,0,'C');
                $pdf->Cell(60,10,$d->nama_jurusan,1,0,'C');
                $pdf->Cell(50,10,$d->no_hp,1,0,'C');
                $pdf->Cell(0,10,'',1,1,'C');
                $a++;
            }
        } elseif ($filter[0] == "fakultas") {
            $pdf->Cell(0,10,"Fakultas : ".$filter[1],0,1);
            //header tabel
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(13,7,'No.',1,0,'C');
            $pdf->Cell(35,7,'NIM',1,0,'C');
            $pdf->Cell(60,7,'NAMA',1,0,'C');
            $pdf->Cell(60,7,'JURUSAN',1,0,'C');
            $pdf->Cell(40,7,'KELOMPOK',1,0,'C');
            $pdf->Cell(35,7,'NO. HP',1,0,'C');
            $pdf->Cell(0,7,'TTD',1,1,'C');

            //body tabel
            $pdf->SetFont('Arial','',12);
            $a = 1;
            foreach ($data as $d) {
                $pdf->Cell(13,10,$a,1,0,'C');
                $pdf->Cell(35,10,$d->nim,1,0,'C');
                $pdf->Cell(60,10,$d->nama_lengkap,1,0,'C');
                $pdf->Cell(60,10,$d->nama_jurusan,1,0,'C');
                $pdf->Cell(40,10,$d->nama_kelompok,1,0,'C');
                $pdf->Cell(35,10,$d->no_hp,1,0,'C');
                $pdf->Cell(0,10,'',1,1,'C');
                $a++;
            }

        } elseif ($filter[0] == "fakultas") {
            $pdf->Cell(0,10,"Fakultas : ".$filter[1],0,1);
            //header tabel
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(13,7,'No.',1,0,'C');
            $pdf->Cell(35,7,'NIM',1,0,'C');
            $pdf->Cell(60,7,'NAMA',1,0,'C');
            $pdf->Cell(60,7,'JURUSAN',1,0,'C');
            $pdf->Cell(40,7,'KELOMPOK',1,0,'C');
            $pdf->Cell(35,7,'NO. HP',1,0,'C');
            $pdf->Cell(0,7,'TTD',1,1,'C');

            //body tabel
            $pdf->SetFont('Arial','',12);
            $a = 1;
            foreach ($data as $d) {
                $pdf->Cell(13,10,$a,1,0,'C');
                $pdf->Cell(35,10,$d->nim,1,0,'C');
                $pdf->Cell(60,10,$d->nama_lengkap,1,0,'C');
                $pdf->Cell(60,10,$d->nama_jurusan,1,0,'C');
                $pdf->Cell(40,10,$d->nama_kelompok,1,0,'C');
                $pdf->Cell(35,10,$d->no_hp,1,0,'C');
                $pdf->Cell(0,10,'',1,1,'C');
                $a++;
            }

        } elseif ($filter[0] == "semua") {
            //header tabel
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(13,7,'No.',1,0,'C');
            $pdf->Cell(35,7,'NIM',1,0,'C');
            $pdf->Cell(60,7,'NAMA',1,0,'C');
            $pdf->Cell(60,7,'JURUSAN',1,0,'C');
            $pdf->Cell(40,7,'KELOMPOK',1,0,'C');
            $pdf->Cell(35,7,'NO. HP',1,0,'C');
            $pdf->Cell(0,7,'TTD',1,1,'C');

            //body tabel
            $pdf->SetFont('Arial','',12);
            $a = 1;
            foreach ($data as $d) {
                $pdf->Cell(13,10,$a,1,0,'C');
                $pdf->Cell(35,10,$d->nim,1,0,'C');
                $pdf->Cell(60,10,$d->nama_lengkap,1,0,'C');
                $pdf->Cell(60,10,$d->nama_jurusan,1,0,'C');
                $pdf->Cell(40,10,$d->nama_kelompok,1,0,'C');
                $pdf->Cell(35,10,$d->no_hp,1,0,'C');
                $pdf->Cell(0,10,'',1,1,'C');
                $a++;
            }

        }



        $pdf->Output();  
    }

    public function cetak_idcard($mhs)
    {
        $pdf = new Cfpdf('P','mm',array(100,65));

        $base = base_url('assets/image/');
        $width = $pdf->getPageWidth();

        $pdf->SetAutoPageBreak(false);
        $pdf->setMargins(2,5);
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(0,4,'PESERTA','',1,'C');
        $pdf->Ln(1);
        $pdf->SetFont('Arial','',10);
        foreach ($mhs as $m) {
            $pdf->Cell(0,4,'BINTALWAKA '.$m->tahun_bintalwaka,'',1,'C');
            $pdf->Cell(0,4,'UKMK ST. IGNATIUS LOYOLA','',1,'C');
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(0,4,'UNIVERSITAS MERDEKA MALANG','',1,'C');
        
            $pdf->Ln(3);
            $img_length = 30;
            $img_width = 40;
            $y = $pdf->getY();
            $x = ($width/2)-($img_length/2);
            $pdf->Image($base.'mahasiswa/'.$m->image,$x,$y,$img_length,$img_width,'JPG');

            $y2 = $y+$img_width;
            $pdf->setY($y2);

            $pdf->Ln(4);

            $pdf->SetFont('Arial','',8);
            $pdf->Cell(17,5,'NAMA','',0);
            $pdf->Cell(3,5,':','',0,'C');
            $pdf->Cell(0,5,$m->nama_panggilan,'',1);

            $pdf->Cell(17,5,'KELOMPOK','',0);
            $pdf->Cell(3,5,':','',0,'C');
            $pdf->Cell(0,5,$m->nama_kelompok,'',1);

            $pdf->Ln(7);

            $pdf->SetFont('Arial','',9);
            $pdf->Cell(0,5,$m->lokasi,'',1,'C');
            $pdf->Cell(0,5,$m->tanggalbintalwaka,'',1,'C');
            $pdf->Output('I',$m->nim.'_idcard.pdf');
        }
    }

    //JSON Formatter
	public function jsonformatter($error,$msg,$data)
	{
		$json['error'] = $error;
        $json['message'] = $msg;
		$json['mhs'] = $data;
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json));
    }
    
}


?>