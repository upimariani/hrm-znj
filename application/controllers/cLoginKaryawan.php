<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLoginKaryawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLogin');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vLoginKaryawan');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $data = $this->mLogin->login_karyawan($username, $password);
            if ($data) {
                $id_karyawan = $data->id_kar_daftar;
                $stat_daftar = $data->stat_daftar;
                $array = array(
                    'id_karyawan' => $id_karyawan,
                    'stat_daftar' => $stat_daftar
                );
                $this->session->set_userdata($array);
                redirect('Karyawan/cDashboard');
            } else {
                $this->session->set_flashdata('error', 'Username dan Password Anda Salah !!!');
                redirect('cLoginKaryawan');
            }
        }
    }
    public function logout_karyawan()
    {
        $this->session->unset_userdata('id_karyawan');
        $this->session->unset_userdata('stat_daftar');
        $this->session->set_flashdata('success', 'Anda Berhasil Logout!!!');
        redirect('cLoginKaryawan');
    }

    public function daftar()
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


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vDaftarKaryawan');
        } else {
            $config['upload_path']          = './asset/surat';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 500000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('surat')) {
                $error = array(
                    'error' => $this->upload->display_errors()
                );
                $this->load->view('vDaftarKaryawan', $error);
            } else {
                $upload_data = $this->upload->data();
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
                $this->mLogin->daftar($data);
                $this->session->set_flashdata('success', 'Anda Berhasil Daftar!!!');
                redirect('cLoginKaryawan');
            }
        }
    }
}

/* End of file cLoginKaryawan.php */
