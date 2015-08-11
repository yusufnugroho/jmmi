<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_apply extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function insert($table,$data)
	{
		# code...
		$this->db->insert($table,$data);
	}
	public function getall($table)
	{
		# code...
		return $this->db->get($table)->result();
	}
	public function select_where($tablename, $where)
	{
		$data = $this->db->get_where($tablename, $where);
		return $data->result();
	}

	public function hapusMentor($table, $nrp)
	{
		$this->db->where($nrp);
		$this->db->delete($table);
		//$this->db->query("DELETE FROM `mentor` WHERE `NRP_MENTOR` =`$nrp`");
	}
}
