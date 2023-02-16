<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPenggajian extends CI_Controller
{

    public function index()
    {
        $this->load->view('Karyawan/Layout/head');
        $this->load->view('Karyawan/Layout/sidebar');
        $this->load->view('Karyawan/vPenggajian');
        $this->load->view('Karyawan/Layout/footer');
    }
}

/* End of file cPenggajian.php */
