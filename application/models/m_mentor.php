<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_mentor extends CI_Model {
	public function __construct() 
        {
		parent::__construct();
	}
	public function get_all($table){
		return $this->db->get($table)->result_array();
	}
	public function getDataMentor()
	{
		return $this->db->query("select * from mentor where 1");
	}
        public function getDataMentorActive()
	{
		return $this->db->query("select * from mentor where STATUS_MENTOR ='Aktif'");
	}
	public function insert($nrpmentor,$nrpkj,$depanmentor,$belakangmentor,$jkmentor,$hpmentor,$pathmentor)
	{
		$this->db->query("insert into mentor values('$nrpmentor','$nrpkj','$depanmentor','$belakangmentor','$jkmentor','$hpmentor','$nrpmentor','Aktif', '$pathmentor')");
	}
	public function update($nrpmentor,$nrpkj,$depanmentor,$belakangmentor,$jkmentor,$hpmentor)
	{
		$this->db->query("update mentor set NRP_KJ = '$nrpkj', NAMA_DEPAN_MENTOR = '$depanmentor', NAMA_BELAKANG_MENTOR = '$belakangmentor',JK_MENTOR ='$jkmentor', TELEPON_MENTOR = '$hpmentor' where NRP_MENTOR = '$nrpmentor'");
	}

	public function updateData($NRP)
	{
		
	}
	public function hapusMentor($table, $nrp)
	{
		$this->db->where($nrp);
		$this->db->delete($table);
		//$this->db->query("DELETE FROM `mentor` WHERE `NRP_MENTOR` =`$nrp`");
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
	public function update_db($table, $update_val, $where){
		return $this->db->update($table, $update_val, $where);
	}
}
