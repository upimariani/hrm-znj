<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAbsensi extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mKaryawan');
        $this->load->model('mAbsensi');
    }

    public function index()
    {
        $data = array(
            'karyawan' => $this->mKaryawan->select()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/vAbsensi', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function createAbsen()
    {
        $data = array(
            'karyawan' => $this->mKaryawan->select()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/vCreateAbsen', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function addAbsen()
    {
        $data = array(
            'id' => $this->input->post('karyawan'),
            'name' => $this->input->post('absen'),
            'price' => '0',
            'time' => date('d-m-Y H:i:s'),
            'date' => $this->input->post('tgl'),
            'qty' => '1',
            'karyawan' => $this->input->post('nama')
        );
        $this->cart->insert($data);
        $this->session->set_flashdata('success', 'Berhasil Absen!!!');
        redirect('Admin/cAbsensi/createAbsen');
    }
    public function hapus($rowid)
    {
        $this->cart->remove($rowid);
        $this->session->set_flashdata('success', 'Berhasil Dihapus!!!');
        redirect('Admin/cAbsensi/createAbsen');
    }
    public function save()
    {
        foreach ($this->cart->contents() as $key => $value) {
            $data = array(
                'id_karyawan' => $value['id'],
                'tgl_absensi' => $value['date'],
                'stat_absensi' => $value['name'],
                'time_absensi' => $value['time']
            );
            $this->mAbsensi->save($data);
        }
        $this->cart->destroy();
        $this->session->set_flashdata('success', 'Absen Hari Ini berhasil dimasukkan!!!');
        redirect('Admin/cAbsensi');
    }
    public function view($id)
    {
        $data = array(
            'view_periode' => $this->mAbsensi->view_periode($id)
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/vViewAbsensi', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function detailAbsen($id, $tgl)
    {
        $date = $tgl;
        $tanggal = explode('-', $date);
        $data = array(
            'detail' => $this->mAbsensi->detail_absensi($id, $tanggal[1])
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/vDetailAbsen', $data);
        $this->load->view('Admin/Layout/footer');
    }
}

/* End of file cAbsensi.php */
