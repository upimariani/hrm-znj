<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPenggajian extends CI_Model
{
    public function select($id_karyawan, $month)
    {
        $data['gaji_periode'] = $this->db->query("SELECT * FROM `penggajian` JOIN absensi ON penggajian.id_penggajian=absensi.id_penggajian JOIN karyawan ON karyawan.id_karyawan=absensi.id_karyawan JOIN karyawan_daftar ON karyawan_daftar.id_kar_daftar=karyawan.id_kar_daftar WHERE karyawan.id_karyawan='" . $id_karyawan . "' GROUP BY penggajian.id_penggajian;")->result();
        $data['absensi_hadir'] = $this->db->query("SELECT COUNT(karyawan.id_karyawan) as jml, karyawan.id_karyawan, stat_absensi FROM absensi JOIN karyawan ON karyawan.id_karyawan=absensi.id_karyawan JOIN karyawan_daftar ON karyawan_daftar.id_kar_daftar=karyawan.id_kar_daftar WHERE stat_absensi='1' AND karyawan.id_karyawan='" . $id_karyawan . "' AND month(tgl_absensi) = '" . $month . "';")->row();
        return $data;
    }
}

/* End of file mPenggajian.php */
