<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_dosen extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getDataDosen()
	{
		return $this->db->query("select * from Dosen where STATUS_DOSEN='Aktif'");
	}
	public function insert($nipdosen,$nrpkj,$depanDosen,$belakangDosen,$jkDosen,$hpDosen)
	{
		$this->db->query("insert into Dosen values('$nipdosen','$nrpkj','$depanDosen','$belakangDosen','$jkDosen','$hpDosen','$nipdosen','Aktif')");
	}
	public function update($nipdosen,$nrpkj,$depanDosen,$belakangDosen,$jkDosen,$hpDosen)
	{
		$this->db->query("update Dosen set NRP_KJ = '$nrpkj', NAMA_DEPAN_Dosen = '$depanDosen', NAMA_BELAKANG_Dosen = '$belakangDosen', TELEPON_Dosen = '$hpDosen' where NIP_DOSEN = '$nipdosen'");
	}
	public function updateData($NRP)
	{
		
	}
	public function hapusDosen($nrp)
	{
		$this->db->query("update Dosen set STATUS_DOSEN ='Tidak Aktif' where NIP_DOSEN='$nrp'");
	}
	public function getData($nrp)
	{
		return $this->db->query("select * from Dosen where NIP_DOSEN='$nrp'");
	}
	public function select_where($tablename, $where)
	{
		$data = $this->db->get_where($tablename, $where);
		return $data->result_array();
	}
}
