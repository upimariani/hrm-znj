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
	}
}

/* End of file mCuti.php */
