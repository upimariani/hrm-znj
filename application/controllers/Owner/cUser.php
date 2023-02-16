<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cUser extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mUser');
    }


    public function index()
    {
        $data = array(
            'user' => $this->mUser->select()
        );
        $this->load->view('Owner/Layout/head');
        $this->load->view('Owner/Layout/sidebar');
        $this->load->view('Owner/vUser', $data);
        $this->load->view('Owner/Layout/footer');
    }
    public function create()
    {
        $this->form_validation->set_rules('nama', 'Nama User', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat User', 'required');
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required|min_length[11]|max_length[12]');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level_user', 'Level User', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Owner/Layout/head');
            $this->load->view('Owner/Layout/sidebar');
            $this->load->view('Owner/vTambahUser');
            $this->load->view('Owner/Layout/footer');
        } else {
            $data = array(
                'nama_user' => $this->input->post('nama'),
                'alamat_user' => $this->input->post('alamat'),
                'no_hp_user' => $this->input->post('no_hp'),
                'jk_user' => $this->input->post('jk'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level_user' => $this->input->post('level_user')
            );
            $this->mUser->insert($data);
            $this->session->set_flashdata('success', 'Data User berhasil ditambahkan!!');
            redirect('Owner/cUser');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'Nama User', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat User', 'required');
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required|min_length[11]|max_length[12]');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level_user', 'Level User', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'user' => $this->mUser->edit($id)
            );
            $this->load->view('Owner/Layout/head');
            $this->load->view('Owner/Layout/sidebar');
            $this->load->view('Owner/vEditUser', $data);
            $this->load->view('Owner/Layout/footer');
        } else {
            $data = array(
                'nama_user' => $this->input->post('nama'),
                'alamat_user' => $this->input->post('alamat'),
                'no_hp_user' => $this->input->post('no_hp'),
                'jk_user' => $this->input->post('jk'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level_user' => $this->input->post('level_user')
            );
            $this->mUser->update($id, $data);
            $this->session->set_flashdata('success', 'Data User berhasil diperbaharui!!');
            redirect('Owner/cUser');
        }
    }
    public function hapus($id)
    {
        $this->mUser->delete($id);
        $this->session->set_flashdata('success', 'Data User berhasil dihapus!!');
        redirect('Owner/cUser');
    }
}


/* End of file cUser.php */
