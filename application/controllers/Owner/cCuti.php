<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCuti extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('mCuti');
	}

	public function index()
	{
		$data = array(
			'cuti' => $this->mCuti->select_all()
		);
		$this->load->view('Owner/Layout/head');
		$this->load->view('Owner/Layout/sidebar');
		$this->load->view('Owner/vPengajuanCuti', $data);
		$this->load->view('Owner/Layout/footer');
	}
	public function setujui($id)
	{
		$data = array(
			'stat_cuti' => '1'
		);
		$this->mCuti->setujui($id, $data);
		$this->session->set_flashdata('success', 'Pengajuan Cuti Karyawan Disetujui!!!');
		redirect('Owner/cCuti');
	}
}

/* End of file cCuti.php */
