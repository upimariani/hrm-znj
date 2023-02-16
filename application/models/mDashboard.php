<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{
    public function informasi_profile($session)
    {
        $this->db->select('*');
        $this->db->from('karyawan_daftar');
        $this->db->where('id_kar_daftar', $session);
        return $this->db->get()->row();
    }
    public function update_profile($id, $data)
    {
        $this->db->where('id_kar_daftar', $id);
        $this->db->update('karyawan_daftar', $data);
    }
}

/* End of file mDashboard.php */
