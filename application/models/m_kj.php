<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kj extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getDataKJ()
	{
		return $this->db->query("select * from KJ where 1");
	}
	public function getDataKJActive()
	{
		return $this->db->query("select * from KJ where STATUS_KJ='Aktif' ");
	}        
	public function insert($nrpkj,$depankj,$belakangkj,$jkkj,$telepon_kj)
	{
		$this->db->query("INSERT INTO `kj`(`NRP_KJ`, `NAMA_DEPAN_KJ`, `NAMA_BELAKANG_KJ`, `TELEPON_KJ`, `STATUS_KJ`, `PASSWORD_KJ`,`JK_KJ`) VALUES ('$nrpkj','$depankj','$belakangkj','$telepon_kj','Aktif','$nrpkj','$jkkj')");
	}
	public function update($nrpkj,$depanmente,$belakangmente,$hpkj,$jkkj)
	{
		$this->db->query("UPDATE `kj` SET `NRP_KJ`='$nrpkj',`NAMA_DEPAN_KJ`='$depankj',`NAMA_BELAKANG_KJ`='$belakangkj',`TELEPON_KJ`='$hpkj', `JK_KJ`='$jkkj' WHERE 1");
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
        public function active($nrp)
	{
		$this->db->query("update kj set STATUS_KJ ='Aktif' where NRP_KJ='$nrp'");
	}
        public function deactive($nrp)
	{
		$this->db->query("update kj set STATUS_KJ ='Tidak Aktif' where NRP_KJ='$nrp'");
	}
}
