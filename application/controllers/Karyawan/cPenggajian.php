<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPenggajian extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPenggajian');
	}


	public function index()
	{
		$data = array(
			'gaji' => $this->mPenggajian->gaji_karyawan($this->session->userdata('id'))
		);
		$this->load->view('Karyawan/Layout/head');
		$this->load->view('Karyawan/Layout/sidebar');
		$this->load->view('Karyawan/vPenggajian', $data);
		$this->load->view('Karyawan/Layout/footer');
	}
	public function konfirmasi($id_penggajian)
	{
		$data = array(
			'status_gajian' => '1'
		);
		$this->mPenggajian->konfirmasi_karyawan($id_penggajian, $data);
		$this->session->set_flashdata('success', 'Gaji Berhasil Dikonformasi oleh Karyawan!!!');
		redirect('Karyawan/cPenggajian', 'refresh');
	}
}

/* End of file cPenggajian.php */
