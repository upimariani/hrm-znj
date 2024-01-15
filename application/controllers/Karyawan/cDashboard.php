<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDashboard');
	}

	public function index()
	{
		$data = array(
			'profile' => $this->mDashboard->informasi_profile($this->session->userdata('id_karyawan'))
		);
		$this->load->view('Karyawan/Layout/head');
		$this->load->view('Karyawan/Layout/sidebar');
		$this->load->view('Karyawan/vDashboard', $data);
		$this->load->view('Karyawan/Layout/footer');
	}
	public function edit_profile($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon', 'required');
		$this->form_validation->set_rules('ttl', 'Tempat, Tanggal Lahir', 'required');
		$this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
		$this->form_validation->set_rules('pend', 'Pendidikan Terakhir', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('stat_kawin', 'Status Kawin', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']          = './asset/surat';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 500000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('surat')) {
				$data = array(
					'profile' => $this->mDashboard->informasi_profile($this->session->userdata('id_karyawan'))
				);
				$this->load->view('Karyawan/Layout/head');
				$this->load->view('Karyawan/Layout/sidebar');
				$this->load->view('Karyawan/vDashboard', $data);
				$this->load->view('Karyawan/Layout/footer');
			} else {

				$upload_data =  $this->upload->data();
				$data = array(
					'nama_lengkap' => $this->input->post('nama'),
					'jk_kar' => $this->input->post('jk'),
					'tempat_tl' => $this->input->post('ttl'),
					'kewarganegaraan' => $this->input->post('kewarganegaraan'),
					'pend_terakhir' => $this->input->post('pend'),
					'agama' => $this->input->post('agama'),
					'stat_kawin' => $this->input->post('stat_kawin'),
					'alamat' => $this->input->post('alamat'),
					'no_hp' => $this->input->post('no_hp'),
					'stat_daftar' => '0',
					'username_kar' => $this->input->post('username'),
					'password_kar' => $this->input->post('password'),
					'surat_lamaran' => $upload_data['file_name']
				);
				$this->mDashboard->update_profile($id, $data);
				$this->session->set_flashdata('success', 'Data Profile Berhasil Diperbaharui !!!');
				redirect('Karyawan/cDashboard');
			} //tanpa ganti gambar
			$data = array(
				'nama_lengkap' => $this->input->post('nama'),
				'jk_kar' => $this->input->post('jk'),
				'tempat_tl' => $this->input->post('ttl'),
				'kewarganegaraan' => $this->input->post('kewarganegaraan'),
				'pend_terakhir' => $this->input->post('pend'),
				'agama' => $this->input->post('agama'),
				'stat_kawin' => $this->input->post('stat_kawin'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'stat_daftar' => '0',
				'username_kar' => $this->input->post('username'),
				'password_kar' => $this->input->post('password')
			);
			$this->mDashboard->update_profile($id, $data);
			$this->session->set_flashdata('success', 'Data Profile Berhasil Diperbaharui !!!');
			redirect('Karyawan/cDashboard');
		}
		$data = array(
			'profile' => $this->mDashboard->informasi_profile($this->session->userdata('id_karyawan'))
		);
		$this->load->view('Karyawan/Layout/head');
		$this->load->view('Karyawan/Layout/sidebar');
		$this->load->view('Karyawan/vDashboard', $data);
		$this->load->view('Karyawan/Layout/footer');
	}
	public function edit_foto($id)
	{
		$config['upload_path']          = './asset/foto';
		$config['allowed_types']        = 'jpeg|png|jpg|gif';
		$config['max_size']             = 500000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto')) {
			$data = array(
				'profile' => $this->mDashboard->informasi_profile($this->session->userdata('id_karyawan'))
			);
			$this->load->view('Karyawan/Layout/head');
			$this->load->view('Karyawan/Layout/sidebar');
			$this->load->view('Karyawan/vDashboard', $data);
			$this->load->view('Karyawan/Layout/footer');
		} else {
			$upload_data =  $this->upload->data();
			$data = array(
				'foto' => $upload_data['file_name']
			);
			$this->mDashboard->update_profile($id, $data);
			$this->session->set_flashdata('success', 'Data Foto Berhasil Diperbaharui !!!');
			redirect('Karyawan/cDashboard');
		}
	}
}

/* End of file cDashboard.php */
