<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class materi extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_mentor');
		$this->load->model('m_mente');
		$this->load->model('m_dosen');
		$this->load->model('m_kj');
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
		$this->load->view('frontend/header/header', $data);
		$this->load->model("m_materi");
		$data['materi'] = $this->m_materi->gettable_sort('materi', 'ID_MATERI');
		$data['file'] = $this->m_materi->gettable_sort('file', 'ID');
		$this->load->view('frontend/content/materi', $data);
		$this->load->view('frontend/footer/footer');
	}

	public function tulisan(){
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
		$this->load->model("m_materi");
		$data['file'] = $this->m_materi->gettable_sort('materi', 'ID_MATERI');
		$this->load->view('frontend/content/materi/tulisan', $data);
		$this->load->view('frontend/footer/footer');
	}
	public function file(){
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
		$this->load->model("m_materi");
		$data['file'] = $this->m_materi->gettable_sort('file', 'ID');
		$this->load->view('frontend/content/materi/file', $data);
		$this->load->view('frontend/footer/footer');
	}

	public function baca($id){
		$this->load->model("m_artikel");
		$this->load->model("m_materi");
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
		$this->load->view('frontend/header/header', $data);
		$this->load->model("m_materi");
		$where = array(
			'ID_MATERI' => $id,
			);
		$data['materi'] = $this->m_materi->select_where('materi', $where);
		$data['artikel_terbaru'] = $this->m_artikel->gettable_sort_limit('artikel', "ID_ARTIKEL", 5);
		$data['materi_tertulis_terbaru'] = $this->m_materi->gettable_sort_limit('materi', "ID_MATERI", 5);
		$data['agenda_terbaru'] = $this->m_agenda->gettable_sort_limit('agenda', "ID_AGENDA", 5);
		$this->load->view('frontend/content/materi/baca', $data);
		$this->load->view('frontend/footer/footer');
	}
}
?>