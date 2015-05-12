<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mentor extends CI_Controller {

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
		$this->load->model('m_kj');
		$this->load->model('m_mentor');
	}

	public function index()
	/*{
		$data['as'] = 'mentor';
		$this->load->view('login',$data);
	}
	public function login()
	{
		echo $this->input->post('nrp');
		echo $this->input->post('password');
	}
	public function data()
	*/{
		$data['mentor'] = $this->m_mentor->getDataMentor();
		$this->load->view('mentor/mentor',$data);
	}
	public function addmentor()
	{		
		$data['kj'] = $this->m_kj->getData();
		$this->load->view('mentor/add',$data);
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