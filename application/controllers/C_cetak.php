<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_cetak extends CI_Controller {

    public function read()
    {
        $nim = $this->input->post('nim');
        $data = $this->m_cetak->readBy($nim);
        $this->jsonformatter(false,'berhasil',$data->result(),200);
    }

    public function sertifikat()
    {
        $base = base_url('assets/image/');
        $tahun = 2018;
        $pdf = new Cfpdf('L','mm','A4');
        $pdf->AddPage();
        $width = $pdf->getPageWidth();
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(57,5,'PANITIA BINTALWAKA '.$tahun,0,1);
        $pdf->Cell(70,5,'UKM KATOLIK ST. IGNATIUS LOYOLA',0,1);
        $pdf->Cell(70,5,'UNIVERSITAS MERDEKA MALANG',0,1);
        $pdf->Cell(70,8,'Jl. Terusan Dieng No.57 Malang',0,1);
        $pdf->Cell(70,2,'(Basement D3 Perbankan)',0,1);
        $pdf->setXY(($width-10)-20,8);
        $pdf->Image($base.'logounmer.jpg',null,null,20,20,'JPG');
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
        $pdf->Image($base.'mahasiswa/default_profile.jpg',null,null,30,40,'JPG');
        $pdf->setX(10);

        $pdf->SetFont('Arial','U',18);
        $pdf->Cell(0,15,'NAMA',0,1,'C');

        $pdf->SetFont('Arial','',14);
        $pdf->Cell(0,6,'Atas Partisipasinya Sebagai PESERTA BINTALWAKA '.$tahun,0,1,'C');
        $pdf->Cell(0,6,'di {tempat}, tanggal {dd MMM YYYY}',0,1,'C');
        $pdf->Cell(0,6,'Dengan Tema:',0,1,'C');
        $pdf->SetFont('Arial','U',14);
        $pdf->Cell(0,6,'{tema}',0,1,'C');

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
        

        $pdf->Output();
    }

    public function create()
    {
        $username = $this->input->post('user');
        $pass = $this->input->post('pass');

        $data = array('username' => $username,
                       'password' => $pass);
        $this->m_user->create($data);
        header("location: ".base_url('admin/user'));
    }

    public function update()
    {
        $id = $this->input->post('id-user-edit');
        $username = $this->input->post('user-edit');
        $pass = $this->input->post('pass-edit');

        $data = array('username' => $username,
                        'password' => $pass);
        $this->m_user->update($id,$data);
        header("location: ".base_url('admin/user'));
    }

    public function delete()
    {   
        $id = $this->input->post('id');
        
        $del = $this->m_user->delete($id);
        if ($del > 0) {
            $this->jsonformatter(false,'sukses','');
        } else {
            $this->jsonformatter(false,'gagal','');
        }
        // header("location: ".base_url('admin/user'));
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