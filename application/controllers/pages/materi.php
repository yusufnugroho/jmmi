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
		$this->load->model("m_materi");
		$data['materi'] = $this->m_materi->gettable('materi');
		$data['file'] = $this->m_materi->gettable('file');
		$this->load->view('frontend/header/header');
		$this->load->view('frontend/content/materi', $data);
		$this->load->view('frontend/footer/footer');
	}

	public function tulisan(){
		$this->load->model("m_materi");
		$data['file'] = $this->m_materi->gettable('materi');
		$this->load->view('frontend/header/header');
		$this->load->view('frontend/content/materi/tulisan', $data);
		$this->load->view('frontend/footer/footer');
	}
	public function file(){
		$this->load->model("m_materi");
		$data['file'] = $this->m_materi->gettable('file');
		$this->load->view('frontend/header/header');
		$this->load->view('frontend/content/materi/file', $data);
		$this->load->view('frontend/footer/footer');
	}

	public function baca($id){
		$this->load->model("m_materi");
		$where = array(
			'ID_MATERI' => $id,
			);
		$data['materi'] = $this->m_materi->select_where('materi', $where);
		$this->load->view('frontend/header/header');
		$this->load->view('frontend/content/materi/baca', $data);
		$this->load->view('frontend/footer/footer');
	}
}
?>