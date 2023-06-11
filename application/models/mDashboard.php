<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{

	//dashoard karyawan
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

	//dashboard admin
	public function jml_dashboard_admin()
	{
		$data['calon_daftar'] = $this->db->query("SELECT COUNT(id_kar_daftar) as jml_calon FROM `karyawan_daftar`WHERE stat_daftar='0';")->row();
		$data['karyawan'] = $this->db->query("SELECT COUNT(id_karyawan) as jml_karyawan FROM `karyawan`;")->row();
		$data['pengajuan_cuti'] = $this->db->query("SELECT COUNT(id_cuti) as jml_cuti FROM `cuti` WHERE stat_cuti='0';")->row();
		return $data;
	}
}

/* End of file mDashboard.php */
