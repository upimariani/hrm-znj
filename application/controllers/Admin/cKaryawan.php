<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKaryawan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mKaryawan');
    }

    public function index()
    {
        $data = array(
            'karyawan' => $this->mKaryawan->select()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/vKaryawan', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function hapus($id)
    {
        $this->mKaryawan->delete($id);
        $this->session->set_flashdata('success', 'Anda Berhasil Menghapus Data Karyawan!!!');
        redirect('Admin/cKaryawan');
    }
}

/* End of file cKaryawan.php */
