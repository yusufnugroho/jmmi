<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kj extends CI_Controller {

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
		$data['kj'] = $this->m_kj->getDataKJ();
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('kj/indexKJ',$data);
                $this->load->view('dashboard/footer');
	}
	public function addkj()
	{		
		$data['mentor'] = $this->m_mentor->getDataMentor();
		$data['dosen'] = $this->m_dosen->getDataDosen();
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('kj/addkj');
                $this->load->view('dashboard/footer');
        }
	public function update($NRP)
	{

                $data['kj'] = $this->m_kj->getData($NRP);
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('kj/updateKJ',$data);
                $this->load->view('dashboard/footer');
	}
        public function active($nrp)
	{
		$this->m_kj->active($nrp);
		$this->index();
	}
        public function deactive($nrp)
	{
		$this->m_kj->deactive($nrp);
		$this->index();
	}
	public function Hapus($nrp)
	{
		$this->m_kj->hapus($nrp);
		$this->index();
	}

	public function insertkj()
	{
		$nrpkj = $this->input->post('nrpkj');
		$depan = $this->input->post('frontname');
		$belakang = $this->input->post('endname');
		$jkkj = $this->input->post('jkkj');
		$hpkj = $this->input->post('hpkj');
		$this->m_kj->insert($nrpkj,$depan,$belakang,$jkkj,$hpkj);
		$this->index();
	}
	public function updatekj($nrpkj)
	{
		$nrpkj = $this->input->post('nrpkj');
		$depankj = $this->input->post('frontname');
		$belakangkj = $this->input->post('endname');
		$hpkj = $this->input->post('hpkj');
                $jkkj = $this->input->post('jkkj');
		$this->m_kj->update($nrpkj,$depanmente,$belakangmente,$hpkj,$jkkj);
		$this->index();
	}
}

