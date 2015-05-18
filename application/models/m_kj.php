<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kj extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getDataKJ()
	{
		return $this->db->query("select * from KJ where STATUS_KJ='Aktif'");
	}
	public function insert($nrpkj,$depankj,$belakangkj,$telepon_kj)
	{
		$this->db->query("insert into mente values('$nrpkj','$depankj','$belakangkj','$telepon_kj','Aktif','$nrpkj')");
	}
	public function update($nrpkj,$depankj,$belakangkj,$hpkj,$status_kj)
	{
		$this->db->query("UPDATE `kj` SET `NRP_KJ`='$nrpkj',`NAMA_DEPAN_KJ`='$depankj',`NAMA_BELAKANG_KJ`='$belakangkj',`TELEPON_KJ`='$hpkj',`STATUS_KJ`='$status_kj' WHERE 1");
	}
	public function updateData($NRP)
	{
		
	}
	public function hapus($nrp)
	{
		$this->db->query("DELETE FROM `kj` WHERE NRP_KJ='$nrp'");
	}
	public function getData($nrp)
	{
		return $this->db->query("select * from kj where NRP_KJ='$nrp'");
	}
	public function select_where($tablename, $where)
	{
		$data = $this->db->get_where($tablename, $where);
		return $data->result_array();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */