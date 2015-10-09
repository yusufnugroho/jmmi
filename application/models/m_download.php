<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_download extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function select()
	{
		$data = $this->db->query("select NRP_MENTE, NAMA_DEPAN_MENTE, NAMA_BELAKANG_MENTE,
			NILAI_MENTE, dosen.NAMA_DEPAN_DOSEN as nama_depan_dosen, dosen.NAMA_BELAKANG_DOSEN as nama_belakang_dosen,
			mentor.NAMA_DEPAN_MENTOR as nama_depan_mentor, mentor.NAMA_BELAKANG_MENTOR as nama_belakang_mentor from dosen, mente, mentor where".
			" mente.NRP_MENTOR = mentor.NRP_MENTOR and mente.NIP_DOSEN = dosen.NIP_DOSEN order by NRP_MENTE asc
			");
		return $data->result_array();
	}

}
