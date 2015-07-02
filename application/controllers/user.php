<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

        public function __construct() {
		parent::__construct();
                $this->load->helper('url');
                $this->load->model('m_mentor');
		$this->load->model('m_mente');
		$this->load->model('m_dosen');
		$this->load->model('m_mentor');
		$this->load->model('m_kj');
		$this->load->model('m_user');
	}
        public function index()
        {
            /*
            * Check Session*/
            $session = array();
            $session[] = $this->session->userdata('akses');
            $session[] = $this->session->userdata('id');
            $session[] = $this->session->userdata('nama_depan');
            $session[] = $this->session->userdata('nama_belakang');
            //print_r($session);
            if (empty($session)) redirect('welcome/logout');
            
            
            
            $this->load->view("dashboard/header");
            $this->load->view("dashboard/navbar");
            //
            if($session[0]=="mente"){
                $id = $session[1];
                //array
                $where = array('NRP_MENTE' => $id);
                //table | Condition Where
                $data['mente'] = $this->m_user->select_where("mente",$where);
            }
            $data['session'] = $session;
            //print_r($data['data']);
            //die();
            $this->load->view("user/index",$data);

            $this->load->view('dashboard/footer');
            
        }
        
}