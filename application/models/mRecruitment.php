<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mRecruitment extends CI_Model
{
    public function select()
    {
        $this->db->select('*');
        $this->db->from('karyawan_daftar');
        $this->db->where('stat_daftar=0');
        return $this->db->get()->result();
    }
    public function keputusan($id, $data)
    {
        $this->db->where('id_kar_daftar', $id);
        $this->db->update('karyawan_daftar', $data);
    }
    public function data_karyawan($data)
    {
        $this->db->insert('karyawan', $data);
    }
}

/* End of file mRecruitment.php */
