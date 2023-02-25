<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPenggajian extends CI_Model
{
    public function select($id_karyawan, $month)
    {
        $data['gaji_periode'] = $this->db->query("SELECT * FROM `penggajian` JOIN absensi ON penggajian.id_penggajian=absensi.id_penggajian JOIN karyawan ON karyawan.id_karyawan=absensi.id_karyawan JOIN karyawan_daftar ON karyawan_daftar.id_kar_daftar=karyawan.id_kar_daftar WHERE karyawan.id_karyawan='" . $id_karyawan . "' GROUP BY penggajian.id_penggajian;")->result();
        $data['absensi_hadir'] = $this->db->query("SELECT COUNT(karyawan.id_karyawan) as jml, karyawan.id_karyawan, stat_absensi FROM absensi JOIN karyawan ON karyawan.id_karyawan=absensi.id_karyawan JOIN karyawan_daftar ON karyawan_daftar.id_kar_daftar=karyawan.id_kar_daftar WHERE stat_absensi='1' AND karyawan.id_karyawan='" . $id_karyawan . "' AND month(tgl_absensi) = '" . $month . "' AND absensi.id_penggajian = '0';")->row();
        $data['karyawan'] = $this->db->query("SELECT * FROM `karyawan` JOIN karyawan_daftar ON karyawan.id_kar_daftar = karyawan_daftar.id_kar_daftar WHERE karyawan.id_karyawan='" . $id_karyawan . "';")->row();
        return $data;
    }
    public function add_gaji($data)
    {
        $this->db->insert('penggajian', $data);
    }
    public function update_id_penggajian($id_karyawan, $tgl, $data)
    {
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->where('month(tgl_absensi)', $tgl);
        $this->db->update('absensi', $data);
    }

    public function update_penggajian($id_penggajian, $data)
    {
        $this->db->where('id_penggajian', $id_penggajian);
        $this->db->update('penggajian', $data);
    }
    public function delete_penggajian($id_penggajian)
    {
        $this->db->where('id_penggajian', $id_penggajian);
        $this->db->delete('penggajian');
    }
}

/* End of file mPenggajian.php */
