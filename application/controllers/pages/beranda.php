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
		$this->load->view('frontend/header/header');
		$this->load->view('frontend/content/beranda');
		$this->load->view('frontend/footer/footer');
	}
}
?>