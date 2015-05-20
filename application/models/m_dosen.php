<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_dosen extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getDataDosen()
	{
		return $this->db->query("select * from Dosen where 1");
	}
        public function getDataDosenActive()
	{
		return $this->db->query("select * from Dosen where STATUS_DOSEN='Aktif'");
	}
	public function insert($nipdosen,$depanDosen,$belakangDosen,$hpDosen)
	{
		$this->db->query("INSERT INTO `dosen`(`NIP_DOSEN`, `NAMA_DEPAN_DOSEN`, `NAMA_BELAKANG_DOSEN`, `TELEPON_DOSEN`, `PASSWORD_DOSEN`, `STATUS_DOSEN`) VALUES ('$nipdosen','$depanDosen','$belakangDosen','$hpDosen','$nipdosen','Aktif')");
	}
	public function update($nipdosen,$depanDosen,$belakangDosen,$hpDosen)
	{
		$this->db->query("update Dosen set NIP_DOSEN = '$nipdosen', NAMA_DEPAN_Dosen = '$depanDosen', NAMA_BELAKANG_Dosen = '$belakangDosen', TELEPON_Dosen = '$hpDosen' where NIP_DOSEN = '$nipdosen'");
	}
	public function hapusDosen($nrp)
	{
		$this->db->query("update Dosen set STATUS_DOSEN ='Tidak Aktif' where NIP_DOSEN='$nrp'");
	}
	public function getData($nip)
	{
		return $this->db->query("select * from Dosen where NIP_DOSEN='$nip'");
	}
        public function active($nip)
	{
		$this->db->query("update dosen set STATUS_DOSEN ='Aktif' where NIP_DOSEN='$nip'");
	}
        public function deactive($nip)
	{
		$this->db->query("update dosen set STATUS_DOSEN ='Tidak Aktif' where NIP_DOSEN='$nip'");
	}
	public function select_where($tablename, $where)
	{
		$data = $this->db->get_where($tablename, $where);
		return $data->result_array();
	}
}
