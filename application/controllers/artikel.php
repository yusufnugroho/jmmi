<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar');
        $this->load->view('artikel/list');
        $this->load->view('dashboard/footer');
	}
}
