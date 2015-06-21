<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		//$this->load->model('m_mentor');
		//$this->load->model('m_mente');
		//$this->load->model('m_dosen');
		//$this->load->model('m_kj');
	}

	public function index()
	{
		/*
                 * Check Session*/ 
                $session_check = $this->session->userdata('akses');
		echo $session_check;
		if (empty($session_check)) redirect('welcome/logout');
                

		$this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('dashboard/footer');
	}
        public function logout() {
            redirect('welcome/logout');
        }

}

