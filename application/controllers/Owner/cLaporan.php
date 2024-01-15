<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLaporan');
	}


	public function index()
	{
		$data = array(
			'laporan' => $this->mLaporan->laporan_gaji()
		);
		$this->load->view('Owner/Layout/head');
		$this->load->view('Owner/Layout/sidebar');
		$this->load->view('Owner/vLaporan', $data);
		$this->load->view('Owner/Layout/footer');
	}
	public function cetak()
	{
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();


		$pdf->SetFont('Times', 'B', 13);
		$pdf->Cell(185, 10, 'LAPORAN TOTAL GAJIAN PER BULAN', 0, 1, 'C');




		$pdf->Cell(10, 15, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'NO', 1, 0, 'C');
		$pdf->Cell(45, 7, 'Periode Gajian', 1, 0, 'C');
		$pdf->Cell(60, 7, 'Total Gaji Karyawan', 1, 1, 'C');

		$pdf->SetFont('Times', '', 9);
		$no = 1;

		$laporan = $this->mLaporan->laporan_gaji();
		foreach ($laporan as $key => $value) {
			$pdf->Cell(10, 7, $no++, 1, 0, 'C');
			$pdf->Cell(45, 7, $value->tgl_gajian, 1, 0, 'C');
			$pdf->Cell(60, 7, number_format($value->total), 1, 1, 'C');
		}
		$pdf->Output();
	}
}

/* End of file cLaporan.php */
