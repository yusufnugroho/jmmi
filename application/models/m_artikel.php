<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_artikel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function insert($tablename, $where)
	{
		return $this->db->insert($tablename, $where);
		//$this->db->query("INSERT INTO `dosen`(`NIP_DOSEN`, `NAMA_DEPAN_DOSEN`, `NAMA_BELAKANG_DOSEN`, `TELEPON_DOSEN`, `PASSWORD_DOSEN`, `STATUS_DOSEN`) VALUES ('$nipdosen','$depanDosen','$belakangDosen','$hpDosen','$nipdosen','Aktif')");
	}
	public function gettable($tablename)
	{
		return $this->db->query("SELECT * FROM $tablename")->result_array();
	}
	public function select_where($tablename, $where)
	{
		$data = $this->db->get_where($tablename, $where);
		return $data->result_array();
	}
	public function getID($tablename)
	{
		return $this->db->query("select * from $tablename where 1 ORDER BY ID_ARTIKEL DESC LIMIT 1")->result_array();
	}
}
