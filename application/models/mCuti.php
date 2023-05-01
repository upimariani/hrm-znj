<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mCuti extends CI_Model
{
	public function add_cuti($data)
	{
		$this->db->insert('cuti', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('cuti');
		$this->db->join('karyawan', 'karyawan.id_karyawan = cuti.id_karyawan', 'left');
		$this->db->where('karyawan.id_karyawan', $this->session->userdata('id'));
		return $this->db->get()->result();
	}
	public function update($id, $data)
	{
		$this->db->where('id_cuti', $id);
		$this->db->update('cuti', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_cuti', $id);
		$this->db->delete('cuti');
	}

	//owner
	public function select_all()
	{
		$this->db->select('*');
		$this->db->from('cuti');
		$this->db->join('karyawan', 'karyawan.id_karyawan = cuti.id_karyawan', 'left');
		return $this->db->get()->result();
	}
	public function setujui($id, $data)
	{
		$this->db->where('id_cuti', $id);
		$this->db->update('cuti', $data);
	}
}

/* End of file mCuti.php */
