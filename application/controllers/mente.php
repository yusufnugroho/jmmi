<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mente extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->load->view('mente/mente',$data);
	}
	public function addmente()
	{		
		$data['mentor'] = $this->m_mentor->getDataMentor();
		$data['dosen'] = $this->m_dosen->getDataDosen();
		$this->load->view('mente/add',$data);
	}
	public function update($NRP)
	{
		$data['all'] = $this->m_mente->getData($NRP);
		$data['mentor'] = $this->m_mentor->getDataMentor();
		$data['dosen'] = $this->m_dosen->getDataDosen();
		$this->load->view('mente/update',$data);
	}
	public function Hapus($nrp)
	{
		$this->m_mentor->hapusMentor($nrp);
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
		$this->m_mente->update($nrpmente,$nrpmentor,$nipdosen,$depanmente,$belakangmente,$hpmente);
		$this->index();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */