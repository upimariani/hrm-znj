<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPenggajian extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKaryawan');
		$this->load->model('mPenggajian');
	}

	public function index()
	{
		$data = array(
			'karyawan' => $this->mKaryawan->select()
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Layout/sidebar');
		$this->load->view('Admin/vPenggajian', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function gaji_periode($id, $month = NULL)
	{
		$data = array(
			'karyawan' => $this->mKaryawan->select(),
			'gaji' => $this->mPenggajian->select($id, $month),
			'id_karyawan' => $id
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Layout/sidebar');
		$this->load->view('Admin/vViewPenggajian', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function add_gaji($id_karyawan)
	{
		//menghitung absensi hadir
		$date = date('Y-m-d');
		$tanggal = explode('-', $date);
		$data_absensi_hadir = $this->mPenggajian->select($id_karyawan, $tanggal[1]);
		$jumlah_hadir = $data_absensi_hadir['absensi_hadir']->jml;


		$gaji_pokok = $this->input->post('gaji_pokok');
		$transport = $this->input->post('transport');
		$uang_makan = $this->input->post('uang_makan');


		$jml_transport = $transport * $jumlah_hadir;
		$jml_makan = $uang_makan * $jumlah_hadir;

		$total_gaji = $gaji_pokok + $jml_transport + $jml_makan;

		$data = array(
			'tgl_gajian' => date('Y-m-d'),
			'status_gajian' => '0',
			'gaji_pokok' => $gaji_pokok,
			'uang_makan' => $uang_makan,
			'transport' => $transport,
			'tot_gajian' => $total_gaji
		);
		$this->mPenggajian->add_gaji($data);


		//cek id max
		$id_max = $this->db->query("SELECT MAX(id_penggajian) as max FROM `penggajian`")->row();
		$data_id_penggajian = array(
			'id_penggajian' => $id_max->max
		);
		$this->mPenggajian->update_id_penggajian($id_karyawan, $tanggal[1], $data_id_penggajian);
		redirect('Admin/cPenggajian/gaji_periode/' . $id_karyawan);
	}
	public function update_gaji($id_penggajian, $id_karyawan)
	{
		$jumlah_hadir = $this->input->post('jml_hari');


		$gaji_pokok = $this->input->post('gaji_pokok');
		$transport = $this->input->post('transport');
		$uang_makan = $this->input->post('uang_makan');


		$jml_transport = $transport * $jumlah_hadir;
		$jml_makan = $uang_makan * $jumlah_hadir;

		$total_gaji = $gaji_pokok + $jml_transport + $jml_makan;

		$data = array(
			'status_gajian' => '0',
			'gaji_pokok' => $gaji_pokok,
			'uang_makan' => $uang_makan,
			'transport' => $transport,
			'tot_gajian' => $total_gaji
		);
		$this->mPenggajian->update_penggajian($id_penggajian, $data);
		redirect('Admin/cPenggajian/gaji_periode/' . $id_karyawan);
	}
	public function delete_gaji($id_penggajian, $id_karyawan)
	{
		$this->mPenggajian->delete_penggajian($id_penggajian);

		$data = array(
			'id_penggajian' => '0'
		);
		$this->db->where('id_penggajian', $id_penggajian);
		$this->db->update('absensi', $data);
		redirect('Admin/cPenggajian/gaji_periode/' . $id_karyawan);
	}
}

/* End of file Controllername.php */
