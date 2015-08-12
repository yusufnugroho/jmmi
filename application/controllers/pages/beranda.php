<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class beranda extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_mentor');
		$this->load->model('m_mente');
		$this->load->model('m_dosen');
		$this->load->model('m_kj');
	}

	public function index(){
		$this->load->model("m_agenda");
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
		$data['agenda_terbaru'] = $this->m_agenda->gettable_sort_limit('agenda', "TANGGAL_AGENDA", 10);
		$this->load->view('frontend/header/header', $data);
		$this->load->view('frontend/content/beranda');
		$this->load->view('frontend/footer/footer');
	}
}
?>