<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_content extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	public function insert($tablename, $where)
	{
		return $this->db->insert($tablename, $where);
	}
	public function gettable($tablename)
	{
		return $this->db->query("SELECT * FROM $tablename")->result_array();
	}
	public function gettable_sort_limit($tablename, $order_by, $limit){
		return $this->db->query("SELECT * FROM $tablename ORDER BY $order_by DESC LIMIT $limit")->result_array();
	}
	public function select_where($tablename, $where)
	{
		$data = $this->db->get_where($tablename, $where);
		return $data->result_array();
	}
	public function getID($tablename)
	{
		return $this->db->query("select * from $tablename where 1 ORDER BY ID_AGENDA DESC LIMIT 1")->result_array();
	}
	public function deleteId($table,$id){
        $this->db->where('ID_AGENDA', $id);
        $this->db->delete($table);
        
    }
}
