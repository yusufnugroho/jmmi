<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManagePage extends CI_Controller {
	public function profil(){
		// SESSION CHECK
		$session = array();
        $session[] = $this->session->userdata('akses');
        if (!empty($session) && $session[0] == "") redirect('welcome/logout');

        // RETRIEVE DATA FROM DATABASE
        $this->load->model("m_content");
        $data['logo_profil'] = $this->m_content->select_where('lib_contents', array(
        	'id_pages' => 1,
        	'id_type' => 1,
        	));
        $data['list_profil'] = $this->m_content->select_where('lib_contents', array(
        	'id_pages' => 1,
        	'id_type' => 2,
        	));
        $data['moto_profil'] = $this->m_content->select_where('lib_contents', array(
        	'id_pages' => 1,
        	'id_type' => 4,
        	));

        // INIT PARSER VARIABLE
        $data['session'] =  $session[0];
        $data['foto'] = base_url().$data['logo_profil'][0]['content_content'];;

        // CALL VIEW
        $this->load->view("dashboard/header");
        $this->load->view('dashboard/navbar', $data);
        $this->load->view("managepage/profil",$data);
	}
	public function faq(){

	}
	public function kontak(){

	}
	public function footer(){

	}
}