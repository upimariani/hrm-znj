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
		$id_karyawan = $this->db->query("SELECT * FROM `karyawan` WHERE id_kar_daftar='" . $this->session->userdata('id_karyawan') . "'")->row();
		$data = array(
			'list_absen' => $this->mAbsensi->list_absensi($id_karyawan->id_karyawan)
		);
		$this->load->view('Karyawan/Layout/head');
		$this->load->view('Karyawan/Layout/sidebar');
		$this->load->view('Karyawan/vAbsensi', $data);
		$this->load->view('Karyawan/Layout/footer');
	}
	public function absensi()
	{
		$id_karyawan = $this->db->query("SELECT * FROM `karyawan` WHERE id_kar_daftar='" . $this->session->userdata('id_karyawan') . "'")->row();
		$data = array(
			'id_karyawan' => $id_karyawan->id_karyawan,
			'tgl_absensi' => $this->input->post('tgl'),
			'stat_absensi' => $this->input->post('absen'),
			'time_absensi' => date('d-m-Y H:i:s')
		);
		$this->db->insert('absensi', $data);
		$this->session->set_flashdata('success', 'Anda Berhasil Absen Hari Ini!!!');
		redirect('Karyawan/cAbsensi', 'refresh');
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
