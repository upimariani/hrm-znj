<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAbsensi extends CI_Controller
{

    public function index()
    {
        $this->load->view('Karyawan/Layout/head');
        $this->load->view('Karyawan/Layout/sidebar');
        $this->load->view('Karyawan/vAbsensi');
        $this->load->view('Karyawan/Layout/footer');
    }
}

/* End of file cAbsensi.php */
