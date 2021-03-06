<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class universal extends CI_Model {
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
		return $data->result_array();
	}

	public function update($tablename, $content, $where){
		$this->db->update($tablename, $content, $where);
	}
}
