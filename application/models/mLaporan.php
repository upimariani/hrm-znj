<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLaporan extends CI_Model
{
	public function laporan_gaji()
	{
		return $this->db->query("SELECT SUM(tot_gajian) as total, tgl_gajian FROM `penggajian` GROUP BY month(tgl_gajian)")->result();
	}
}

/* End of file mLaporan.php */
