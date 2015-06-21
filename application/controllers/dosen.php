<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_mentor');
		$this->load->model('m_mente');
		$this->load->model('m_dosen');
		$this->load->model('m_kj');
	}

	public function index()
	{
                 /*
                 * Check Session*/ 
                $session_check = $this->session->userdata('akses');
		echo $session_check;
		if (empty($session_check)) redirect('welcome/logout');
                
		$data['dosen'] = $this->m_dosen->getDataDosen();
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('dosen/indexDosen',$data);
                $this->load->view('dashboard/footer');
	}
	public function addDosen()
	{	
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		#$this->load->view('kj/addkj',$data);
                $this->load->view('dosen/addDosen');
                $this->load->view('dashboard/footer');
        }
	public function update($nip)
	{
		$data['dosen'] = $this->m_dosen->getData($nip);
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('dosen/updateDosen',$data);
                $this->load->view('dashboard/footer');
	}
        public function active($nip)
	{
		$this->m_dosen->active($nip);
		$this->index();
	}
        public function deactive($nip)
	{
		$this->m_dosen->deactive($nip);
		$this->index();
	}
	public function Hapus($nip)
	{
		$this->m_dosen->hapus($nip);
		$this->index();
	}

	public function insertDosen()
	{
		$nip = $this->input->post('nip');
		$depan = $this->input->post('frontname');
		$belakang = $this->input->post('endname');
		$hpDosen = $this->input->post('hpdosen');
		$this->m_dosen->insert($nip,$depan,$belakang,$hpDosen);
		$this->index();
	}
	public function updateDosen($nrpkj)
	{
		$nip = $this->input->post('nipdosen');
		$depan = $this->input->post('frontname');
		$belakang = $this->input->post('endname');
		$hp = $this->input->post('hpkj');
		$this->m_dosen->update($nip,$depan,$belakang,$hp);
		$this->index();
	}
}

