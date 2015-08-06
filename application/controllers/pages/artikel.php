<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class artikel extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_mentor');
		$this->load->model('m_mente');
		$this->load->model('m_dosen');
		$this->load->model('m_kj');
	}

	public function index(){
		$this->load->model("m_artikel");
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
		$this->load->view('frontend/header/header', $data);
		$data['artikel'] = $this->m_artikel->gettable('artikel');
		$this->load->view('frontend/content/artikel/tulisan', $data);
		$this->load->view('frontend/footer/footer');
	}

	public function tulisan(){
		$this->load->model("m_artikel");
		$this->load->view('frontend/header/header');
		$this->load->view('frontend/content/artikel/tulisan', $data);
		$this->load->view('frontend/footer/footer');
	}
	public function baca($id){
		$this->load->model("m_artikel");
		$where = array(
			'ID_ARTIKEL' => $id,
			);
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
		$this->load->view('frontend/header/header', $data);
		$data['artikel'] = $this->m_artikel->select_where('artikel', $where);
		$this->load->view('frontend/content/artikel/baca', $data);
		$this->load->view('frontend/footer/footer');
	}
}
?>