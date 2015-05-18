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
		$this->load->view('kj/index',$data);
                $this->load->view('dashboard/footer');
	}
	public function addkj()
	{		
		$data['mentor'] = $this->m_mentor->getDataMentor();
		$data['dosen'] = $this->m_dosen->getDataDosen();
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('mente/add',$data);
                $this->load->view('dashboard/footer');
        }
	public function update($NRP)
	{
		$data['all'] = $this->m_mente->getData($NRP);
		$data['mentor'] = $this->m_mentor->getDataMentor();
		$data['dosen'] = $this->m_dosen->getDataDosen();
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('kj/update',$data);
                $this->load->view('dashboard/footer');
	}
	public function Hapus($nrp)
	{
		$this->m_kj->hapus($nrp);
		$this->index();
	}
	public function insertkj()
	{
		$nrpmente = $this->input->post('nrpmente');
		$nrpmentor = $this->input->post('nrpmentor');
		$nipdosen = $this->input->post('nipdosen');
		$depanmente = $this->input->post('frontname');
		$belakangmente = $this->input->post('endname');
		$jkmente = $this->input->post('jkmente');
		$hpmente = $this->input->post('hpmente');
		$this->m_mente->insert($nrpmente,$nrpmentor,$nipdosen,$depanmente,$belakangmente,$jkmente,$hpmente);
		$this->index();
	}
	public function updatekj($nrpkj)
	{
		$nrpmentor = $this->input->post('nrpmentor');
		$nipdosen = $this->input->post('nipdosen');
		$depanmente = $this->input->post('frontname');
		$belakangmente = $this->input->post('endname');
		$hpmente = $this->input->post('hpmente');
		$this->m_mente->update($nrpmente,$nrpmentor,$nipdosen,$depanmente,$belakangmente,$hpmente);
		$this->index();
	}
}

