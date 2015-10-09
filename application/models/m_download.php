<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_download extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function select()
	{
		$data = $this->db->query("select ((nilai.E_GOM + nilai.E_MA + nilai.E_MK)/3)*100 as nilai_bpm,
			((KEHADIRAN_1 + KEHADIRAN_2 + KEHADIRAN_3 + KEHADIRAN_4 + KEHADIRAN_5 + KEHADIRAN_6 + KEHADIRAN_7 + KEHADIRAN_8 + KEHADIRAN_9 + KEHADIRAN_10)/10)*100 as kehadiran,
			(UAS_KUIS+UAS_TULIS)/2 as nilai_uas,nilai.*,NAMA_DEPAN_MENTE, NAMA_BELAKANG_MENTE,
			NILAI_MENTE, dosen.NAMA_DEPAN_DOSEN as nama_depan_dosen, dosen.NAMA_BELAKANG_DOSEN as nama_belakang_dosen,
			mentor.NAMA_DEPAN_MENTOR as nama_depan_mentor, mentor.NAMA_BELAKANG_MENTOR as nama_belakang_mentor, mente.HURUF_MENTE as NILAI_HURUF from dosen, nilai, mente, mentor where".
			" mente.NRP_MENTOR = mentor.NRP_MENTOR and mente.NIP_DOSEN = dosen.NIP_DOSEN and mente.NRP_MENTE = nilai.NRP_MENTE order by mente.NRP_MENTE asc
			");
		return $data->result_array();
	}

}
