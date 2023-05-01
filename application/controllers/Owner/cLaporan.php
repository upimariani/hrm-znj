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
}

/* End of file cLaporan.php */
