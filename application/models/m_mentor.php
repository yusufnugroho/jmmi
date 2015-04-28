<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_mentor extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getDataMentor()
	{
		return $this->db->query("select * from mentor where STATUS_MENTOR='Aktif'");
	}
	public function insert($nrpmentor,$nrpkj,$depanmentor,$belakangmentor,$jkmentor,$hpmentor)
	{
		$this->db->query("insert into mentor values('$nrpmentor','$nrpkj','$depanmentor','$belakangmentor','$jkmentor','$hpmentor','$nrpmentor','Aktif')");
	}
	public function updateData($NRP)
	{
		
	}
	public function hapusMentor($nrp)
	{
		$this->db->query("update mentor set STATUS_MENTOR ='Tidak Aktif' where NRP_MENTOR='$nrp'");
	}
	public function getData($nrp)
	{
		return $this->db->query("select * from mentor where NRP_MENTOR='$nrp'");
	}
}
