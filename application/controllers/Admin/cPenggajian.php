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
        $month = '02';
        $data_absensi_hadir = $this->mPenggajian->select($id_karyawan, $month);
        echo $data_absensi_hadir['absensi_hadir']->jml;
    }
    public function detail_gaji($id)
    {
        $data = array(
            'karyawan' => $this->mKaryawan->select()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/vDetailGaji', $data);
        $this->load->view('Admin/Layout/footer');
    }
}

/* End of file Controllername.php */
