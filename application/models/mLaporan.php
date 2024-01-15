<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLaporan extends CI_Model
{
	public function laporan_gaji()
	{
		return $this->db->query("SELECT SUM(tot_gajian) as total, tgl_gajian FROM `penggajian` GROUP BY month(tgl_gajian)")->result();
	}
	public function laporan_cuti()
	{
		return $this->db->query("SELECT * FROM `cuti` JOIN karyawan ON cuti.id_karyawan=karyawan.id_karyawan JOIN karyawan_daftar ON karyawan_daftar.id_kar_daftar=karyawan.id_kar_daftar")->result();
	}
}

/* End of file mLaporan.php */
