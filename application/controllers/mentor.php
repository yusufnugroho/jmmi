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
                $this->load->view('mentor/mentor',$data);
                $this->load->view('dashboard/footer');
	}
	public function addmentor()
	{		
		$data['kj'] = $this->m_kj->getData();
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('mentor/add',$data);
                $this->load->view('dashboard/footer');
	}
	public function update($NRP)
	{
		$data['all'] = $this->m_mentor->getData($NRP);
		$data['kj'] = $this->m_kj->getData();
		$this->load->view('mentor/update',$data);
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
		$this->m_mentor->update($nrpmentor,$nrpkj,$depanmentor,$belakangmentor,$hpmentor);
		$this->index();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */