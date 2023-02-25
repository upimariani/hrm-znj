<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLogin extends CI_Model
{
	public function login_user($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array(
			'username' => $username,
			'password' => $password
		));
		return $this->db->get()->row();
	}

	//login karyawan 
	public function login_karyawan($username, $password)
	{
		$this->db->select('*');
		$this->db->from('karyawan_daftar');
		$this->db->join('karyawan', 'karyawan.id_kar_daftar = karyawan_daftar.id_kar_daftar', 'left');

		$this->db->where(array(
			'username_kar' => $username,
			'password_kar' => $password
		));
		return $this->db->get()->row();
	}
	public function daftar($data)
	{
		$this->db->insert('karyawan_daftar', $data);
	}
}

/* End of file mLogin.php */
