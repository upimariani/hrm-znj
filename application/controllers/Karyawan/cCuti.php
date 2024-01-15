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
		//mengambil data id karyawan
		$id_karyawan = $this->db->query("SELECT * FROM `karyawan` WHERE id_kar_daftar='" . $this->session->userdata('id_karyawan') . "'")->row();
		$id = $id_karyawan->id_karyawan;


		$data = array(
			'cuti' => $this->mCuti->select($id),
			'informasi' => $this->mCuti->informasi_sisa_cuti(),
			'id' => $id
		);
		$this->load->view('Karyawan/Layout/head');
		$this->load->view('Karyawan/Layout/sidebar');
		$this->load->view('Karyawan/vCuti', $data);
		$this->load->view('Karyawan/Layout/footer');
	}
	public function add_cuti($id)
	{
		$data = array(
			'id_karyawan' => $id,
			'tgl_cuti' => $this->input->post('tgl_cuti'),
			'alasan_cuti' => $this->input->post('alasan'),
			'jml_hari' => $this->input->post('jml_cuti'),
			'stat_cuti' => '0'
		);
		$this->mCuti->add_cuti($data);
		$this->session->set_flashdata('success', 'Anda Berhasil Pengajukkan Cuti!!!');
		redirect('Karyawan/cCuti');
	}
	public function update_cuti($id_cuti)
	{
		$data = array(
			'tgl_cuti' => $this->input->post('tgl_cuti'),
			'alasan_cuti' => $this->input->post('alasan'),
			'jml_hari' => $this->input->post('jml_cuti'),
			'stat_cuti' => '0'
		);
		$this->mCuti->update($id_cuti, $data);
		$this->session->set_flashdata('success', 'Anda Berhasil Diperbaharui Cuti!!!');
		redirect('Karyawan/cCuti');
	}
	public function delete($id)
	{
		$this->mCuti->delete($id);
		$this->session->set_flashdata('success', 'Anda Berhasil Dihapus Cuti!!!');
		redirect('Karyawan/cCuti');
	}
}

/* End of file cCuti.php */
