<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mente extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_mentor');
		$this->load->model('m_mente');
		$this->load->model('m_dosen');
	}

	public function index()
	{
		$data['mente'] = $this->m_mente->getDataMente();
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('mente/indexMente',$data);
                $this->load->view('dashboard/footer');
	}
	public function addmente()
	{		
		$data['mentor'] = $this->m_mentor->getDataMentorActive();
		$data['dosen'] = $this->m_dosen->getDataDosen();
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('mente/addMente',$data);
                $this->load->view('dashboard/footer');
        }
	public function update($NRP)
	{
		$data['all'] = $this->m_mente->getData($NRP);
		$data['mentor'] = $this->m_mentor->getDataMentorActive();
		$data['dosen'] = $this->m_dosen->getDataDosenActive();
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('mente/updateMente',$data);
                $this->load->view('dashboard/footer');
	}
        public function updateNilai($nrp)
        {
                $data['mente'] = $this->m_mente->getData($nrp);
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('mente/updateNilai',$data);
                $this->load->view('dashboard/footer');
        }
        public function active($nrp)
	{
		$this->m_mente->active($nrp);
		$this->index();
	}
        public function deactive($nrp)
	{
		$this->m_mente->deactive($nrp);
		$this->index();
	}
	public function Hapus($nrp)
	{
		$this->m_mente->hapusMente($nrp);
		$this->index();
	}

	public function insertmente()
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
	public function updatemente($nrpmente)
	{
		$nrpmentor = $this->input->post('nrpmentor');
		$nipdosen = $this->input->post('nipdosen');
		$depanmente = $this->input->post('frontname');
		$belakangmente = $this->input->post('endname');
		$hpmente = $this->input->post('hpmente');
                $jkmente = $this->input->post('jkmente');
		$this->m_mente->update($nrpmente,$nrpmentor,$nipdosen,$depanmente,$belakangmente,$hpmente,$jkmente);
		$this->index();
	}
	public function updateNilaiReady($nrpmente)
	{
		$nilai = $this->input->post('nilai');
           	$this->m_mente->updateNilai($nrpmente,$nilai);
		$this->index();
	}
        
}

