<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mKaryawan extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('karyawan');
		$this->db->join('karyawan_daftar', 'karyawan.id_kar_daftar = karyawan_daftar.id_kar_daftar', 'left');
		$this->db->where('stat_daftar=1');
		return $this->db->get()->result();
	}
	public function delete($id)
	{
		$this->db->where('id_kar_daftar', $id);
		$this->db->delete('karyawan_daftar');

		$this->db->where('id_kar_daftar', $id);
		$this->db->delete('karyawan');
	}
}

/* End of file mKaryawan.php */
