<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kontak extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_mentor');
		$this->load->model('m_mente');
		$this->load->model('m_dosen');
		$this->load->model('m_kj');
		$this->load->model('m_content');
	}

	public function index(){
		$session_check = $this->session->userdata('akses');
		$isLogin = "no";
		$session_data = array();
		if (!empty($session_check)){
			$isLogin = "yes";
			$session_data['ID'] = $this->session->userdata('1');
			$session_data['Nama'] = $this->session->userdata('2');
		}
		$data = array();
		$data['isLogin'] = $isLogin;
		$data['session_data'] = $session_data;
		$data['list_kontak'] = $this->m_content->select_where('lib_contents', 
			array('id_pages' => 3 ,
				'id_type' => 2,));
		$data['location_kontak'] = $this->m_content->select_where('lib_contents', 
			array('id_pages' => 3 ,
				'id_type' => 3,));
		
		$this->load->view('frontend/header/header', $data);
		$this->load->view('frontend/content/kontak');
		$this->load->view('frontend/footer/footer');
	}
}
?>