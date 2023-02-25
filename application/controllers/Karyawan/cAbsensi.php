<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAbsensi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAbsensi');
	}

	public function index()
	{
		$id = $this->session->userdata('id');
		$data = array(
			'list_absen' => $this->mAbsensi->list_absensi($id)
		);
		$this->load->view('Karyawan/Layout/head');
		$this->load->view('Karyawan/Layout/sidebar');
		$this->load->view('Karyawan/vAbsensi', $data);
		$this->load->view('Karyawan/Layout/footer');
	}
	public function detail_absensi($id_karyawan, $month)
	{
		$data = array(
			'detail_absen' => $this->mAbsensi->detail_absensi_karyawan($id_karyawan, $month)
		);
		$this->load->view('Karyawan/Layout/head');
		$this->load->view('Karyawan/Layout/sidebar');
		$this->load->view('Karyawan/vDetailAbsensi', $data);
		$this->load->view('Karyawan/Layout/footer');
	}
}

/* End of file cAbsensi.php */
