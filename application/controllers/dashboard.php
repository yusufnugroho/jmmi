<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		/*
	    * Check Session*/ 
		$session_check = $this->session->userdata('akses');
        //$session_data = $this->sesssion->all_userdata();
		if (empty($session_check)) redirect('welcome/logout');
		else redirect('user');
		$data['session'] = $session_check;
		$this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar', $data);
		$this->load->view('dashboard/footer');
	}
        public function logout() {
            redirect('welcome/logout');
        }

}

