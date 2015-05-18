<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mentor extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_kj');
		$this->load->model('m_mentor');
	}

	public function index()
	{
		$data['mentor'] = $this->m_mentor->getDataMentor();
		$this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
                $this->load->view('mentor/indexMentor',$data);
                $this->load->view('dashboard/footer');
	}
	public function addmentor()
	{		
                $data['mentor'] = $this->m_kj->getDataKJ();
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('mentor/addMentor',$data);
                $this->load->view('dashboard/footer');
	}
	public function update($NRP)
	{
		$data['all'] = $this->m_mentor->getData($NRP);
                $data['kj'] = $this->m_kj->getDataKJ();
		$this->load->view('./dashboard/header');
                $this->load->view('./dashboard/navbar');
                $this->load->view('mentor/updateMentor',$data);
                $this->load->view('./dashboard/footer');
	}
        public function active($nrp)
	{
		$this->m_mentor->active($nrp);
		$this->index();
	}
        public function deactive($nrp)
	{
		$this->m_mentor->deactive($nrp);
		$this->index();
	}
	public function Hapus($nrp)
	{
		$this->m_mentor->hapusMentor($nrp);
		$this->index();
	}
	public function insertmentor()
	{
                
		$nrpmentor = $this->input->post('nrpmentor');
		$nrpkj = $this->input->post('nrpkj');
		$depanmentor = $this->input->post('frontname');
		$belakangmentor = $this->input->post('endname');
		$jkmentor = $this->input->post('jkmentor');
		$hpmentor = $this->input->post('hpmentor');
		$this->m_mentor->insert($nrpmentor,$nrpkj,$depanmentor,$belakangmentor,$jkmentor,$hpmentor);
		$this->index();
	}
	public function updatementor($nrpmentor)
	{
		$nrpkj = $this->input->post('nrpkj');
		$depanmentor = $this->input->post('frontname');
		$belakangmentor = $this->input->post('endname');
		$hpmentor = $this->input->post('hpmentor');
		$jkmentor = $this->input->post('jkmentor');
                $nrpmentor = $nrpmentor;
		$this->m_mentor->update($nrpmentor,$nrpkj,$depanmentor,$belakangmentor,$jkmentor,$hpmentor);
		$this->index();
	}
}
