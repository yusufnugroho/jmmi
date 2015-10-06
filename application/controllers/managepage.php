<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManagePage extends CI_Controller {
	public function profil(){
		$session = array();
        $session[] = $this->session->userdata('akses');
        if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $this->load->view("dashboard/header");
        $data = null;
        $data['session'] =  $session[0];
        $this->load->view('dashboard/navbar', $data);
        
		$foto = base_url()."assets/userfile/icon.png";
        $data['foto'] = $foto;
        $this->load->view("managepage/profil",$data);
	}
	public function faq(){

	}
	public function kontak(){

	}
	public function footer(){

	}
}