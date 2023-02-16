<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cRecruitment extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mRecruitment');
    }
    public function index()
    {
        $data = array(
            'daftar' => $this->mRecruitment->select()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/vRecruitment', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function ditolak($id)
    {
        $data = array(
            'stat_daftar' => '2'
        );
        $this->mRecruitment->keputusan($id, $data);
        $this->session->set_flashdata('success', 'Admin berhasil memberikan keputusan ditolak!!!');
        redirect('Admin/cRecruitment');
    }
    public function diterima($id)
    {
        $data = array(
            'id_kar_daftar' => $id,
            'divisi' => $this->input->post('divisi'),
            'mulai_bekerja' => $this->input->post('tgl'),
            'jabatan' => $this->input->post('jabatan')
        );
        $this->mRecruitment->data_karyawan($data);

        $keputusan = array(
            'stat_daftar' => '1'
        );
        $this->mRecruitment->keputusan($id, $keputusan);
        $this->session->set_flashdata('success', 'Admin berhasil memberikan keputusan diterima sebagai karyawan!!!');
        redirect('Admin/cRecruitment');
    }
}

/* End of file cRecruitment.php */
