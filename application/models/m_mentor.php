<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_mentor extends CI_Model {
	public function __construct() 
        {
		parent::__construct();
	}
	public function getDataMentor()
	{
		return $this->db->query("select * from mentor where 1");
	}
        public function getDataMentorActive()
	{
		return $this->db->query("select * from mentor where STATUS_MENTOR ='Aktif'");
	}
	public function insert($nrpmentor,$nrpkj,$depanmentor,$belakangmentor,$jkmentor,$hpmentor)
	{
		$this->db->query("insert into mentor values('$nrpmentor','$nrpkj','$depanmentor','$belakangmentor','$jkmentor','$hpmentor','$nrpmentor','Aktif')");
	}
	public function update($nrpmentor,$nrpkj,$depanmentor,$belakangmentor,$jkmentor,$hpmentor)
	{
		$this->db->query("update mentor set NRP_KJ = '$nrpkj', NAMA_DEPAN_MENTOR = '$depanmentor', NAMA_BELAKANG_MENTOR = '$belakangmentor',JK_MENTOR ='$jkmentor', TELEPON_MENTOR = '$hpmentor' where NRP_MENTOR = '$nrpmentor'");
	}
	public function updateData($NRP)
	{
		
	}
	public function hapusMentor($nrp)
	{
		$this->db->query("DELETE FROM `mentor` WHERE nrp_mentor =$nrp");
	}
        public function active($nrp)
	{
		$this->db->query("update mentor set STATUS_MENTOR ='Aktif' where NRP_MENTOR='$nrp'");
	}
        public function deactive($nrp)
	{
		$this->db->query("update mentor set STATUS_MENTOR ='Tidak Aktif' where NRP_MENTOR='$nrp'");
	}
	public function getData($nrp)
	{
		return $this->db->query("select * from mentor where NRP_MENTOR='$nrp'");
	}
	public function select_where($tablename, $where)
	{
		$data = $this->db->get_where($tablename, $where);
		return $data->result_array();
	}
}
