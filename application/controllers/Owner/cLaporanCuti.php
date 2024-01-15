<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporanCuti extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLaporan');
	}


	public function index()
	{
		$data = array(
			'laporan' => $this->mLaporan->laporan_cuti()
		);
		$this->load->view('Owner/Layout/head');
		$this->load->view('Owner/Layout/sidebar');
		$this->load->view('Owner/vLaporanCuti', $data);
		$this->load->view('Owner/Layout/footer');
	}
	public function cetak()
	{
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();


		$pdf->SetFont('Times', 'B', 13);
		$pdf->Cell(185, 10, 'LAPORAN CUTI KARYAWAN', 0, 1, 'C');




		$pdf->Cell(10, 15, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'NO', 1, 0, 'C');
		$pdf->Cell(45, 7, 'Nama Karyawan', 1, 0, 'C');
		$pdf->Cell(35, 7, 'Tanggal Cuti', 1, 0, 'C');
		$pdf->Cell(60, 7, 'Alasan Cuti', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Jumlah Hari', 1, 1, 'C');

		$pdf->SetFont('Times', '', 9);
		$no = 1;

		$laporan = $this->mLaporan->laporan_cuti();
		foreach ($laporan as $key => $value) {
			$pdf->Cell(10, 7, $no++, 1, 0, 'C');
			$pdf->Cell(45, 7, $value->nama_lengkap, 1, 0, 'C');
			$pdf->Cell(35, 7, $value->tgl_cuti, 1, 0, 'C');
			$pdf->Cell(60, 7, $value->alasan_cuti, 1, 0, 'C');
			$pdf->Cell(30, 7, $value->jml_hari, 1, 1, 'C');
		}



		$pdf->Output();
	}
}

/* End of file cLaporanCuti.php */
