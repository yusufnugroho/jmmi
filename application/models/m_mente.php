<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_mente extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getDataMente()
	{
		return $this->db->query("select * from mente where STATUS_MENTE='Aktif'");
	}
	public function insert($nrpmente,$nrpmentor,$nipdosen,$depanmente,$belakangmente,$jkmente,$hpmente)
	{
		$this->db->query("insert into mente values('$nrpmente','$nrpmentor','$nipdosen','$depanmente','$belakangmente','$jkmente','$hpmente','$nrpmente','0','Aktif')");
	}
	public function update($nrpmente,$nrpmentor,$nipdosen,$depanmente,$belakangmente,$hpmente)
	{
		$this->db->query("update mente set NRP_MENTOR = '$nrpmentor', NAMA_DEPAN_mente = '$depanmente', NAMA_BELAKANG_mente = '$belakangmente', TELEPON_mente = '$hpmente' where NRP_MENTE = '$nrpmente'");
	}
	public function updateData($NRP)
	{
		
	}
	public function hapusmente($nrp)
	{
		$this->db->query("update mente set STATUS_MENTE ='Tidak Aktif' where NRP_MENTE='$nrp'");
	}
	public function getData($nrp)
	{
		return $this->db->query("select * from mente where NRP_MENTE='$nrp'");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */