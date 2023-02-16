<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAbsensi extends CI_Model
{
    public function save($data)
    {
        $this->db->insert('absensi', $data);
    }
    public function view_periode($id_karyawan)
    {
        return $this->db->query("SELECT * FROM `absensi` JOIN karyawan ON karyawan.id_karyawan=absensi.id_karyawan JOIN karyawan_daftar ON karyawan_daftar.id_kar_daftar=karyawan.id_kar_daftar WHERE karyawan.id_karyawan='" . $id_karyawan . "' GROUP BY month(tgl_absensi);")->result();
    }
    public function detail_absensi($id, $month)
    {
        return $this->db->query("SELECT * FROM `absensi` JOIN karyawan ON karyawan.id_karyawan=absensi.id_karyawan WHERE absensi.id_karyawan='" . $id . "' AND MONTH(tgl_absensi)='" . $month . "';")->result();
    }
}

/* End of file mAbsensi.php */
