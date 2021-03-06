<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_mente extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getDataMente()
	{
		return $this->db->query("select * from mente where 1");
	}
	public function get_all($table){
		return $this->db->get($table)->result_array();
	}

	public function insert($nrpmente,$nrpmentor,$nipdosen,$depanmente,$belakangmente,$jkmente,$hpmente)
	{
		$this->db->query("insert into mente values('$nrpmente','$nrpmentor','$nipdosen','$depanmente','$belakangmente','$jkmente','$hpmente','$nrpmente','','0','Aktif')");
	}
	public function update($nrpmente,$nrpmentor,$nipdosen,$depanmente,$belakangmente,$hpmente,$jkmente)
	{
		$this->db->query("update mente set NRP_MENTOR = '$nrpmentor', NAMA_DEPAN_mente = '$depanmente', NAMA_BELAKANG_mente = '$belakangmente', TELEPON_mente = '$hpmente', JK_MENTE='$jkmente' where NRP_MENTE = '$nrpmente'");
	}
	//Update Baru
	public function updateBaru($set, $where, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$set);
		return true;
	}

        public function updateNilai($nrp,$nilai)
	
	{
		$this->db->query("UPDATE `mente` SET `NILAI_MENTE`='$nilai' WHERE NRP_MENTE='$nrp'");
	}
	public function hapusMente($nrp)
	{
		$this->db->query("DELETE FROM `mente` WHERE nrp_mente ='$nrp'");
	}
    public function select_where($tablename, $where)
	{
		$data = $this->db->get_where($tablename, $where);
		return $data->result_array();
	}
    public function select_where_dosen($NIP_DOSEN)
	{
		return $this->db->query("select * from mente where NIP_DOSEN = ".$NIP_DOSEN);
		//$data = $this->db->get_where($tablename, $where);
		//return $data->result_array();
	}

	public function getData($nrp)
	{
		return $this->db->query("select * from mente where NRP_MENTE='$nrp'");
	}
        public function active($nrp)
	{
		$this->db->query("update mente set STATUS_MENTE ='Aktif' where NRP_MENTE='$nrp'");
	}
        public function deactive($nrp)
	{
		$this->db->query("update mente set STATUS_MENTE ='Tidak Aktif' where NRP_MENTE='$nrp'");
	}
}

