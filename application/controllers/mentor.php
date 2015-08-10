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
        /*
         * Check Session*/ 
        $session_check = $this->session->userdata('akses');
		if (empty($session_check)) redirect('welcome/logout');
                
		$data['mentor'] = $this->m_mentor->getDataMentor();
		$this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar');
        $this->load->view('mentor/indexMentor',$data);
        $this->load->view('dashboard/footer');
	}
	public function addmentor()
	{		
        $data['kj'] = $this->m_kj->getDataKJActive();
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar');
		$this->load->view('mentor/addMentor',$data);
        $this->load->view('dashboard/footer');
	}
	public function update($NRP)
	{
		$data['all'] = $this->m_mentor->getData($NRP);
        $data['kj'] = $this->m_kj->getDataKJActive();
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
		$where = array(
			'NRP_MENTOR' => $nrp, 
		);
		$this->m_mentor->hapusMentor('mentor', $where);
		//$this->m_mentor->hapusMentor($nrp);
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
	public function applicant()
	{
		$this->load->model('m_apply');
		$data['applicant'] = $this->m_apply->getall('apply_mentor');
		$data['kj'] = $this->m_apply->getall('kj');
        $this->load->view('dashboard/navbar');
		$this->load->view('applymentor/list',$data);
	}
	public function detailMentorSipenmaru($id){
		
		$table = "apply_mentor";
		$where = array('nrp' => $id, );
		$this->load->model('m_apply');
		$data['data_apply_mentor'] = $this->m_apply->select_where($table,$where);
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar');
		$this->load->view('applymentor/detail_apply',$data);
		$this->load->view('dashboard/footer');
	}

	public function terimaMentor($id){
		$where = array('nrp' => $id, );
		$this->load->model('m_apply');
		$data['data_apply_mentor'] = $this->m_apply->select_where("apply_mentor", $where);
		$this->m_apply->hapusMentor("apply_mentor", array("nrp" => $id));
		foreach ($data['data_apply_mentor'] as $key => $value) {
			$nrpmentor = $value->nrp;
			$nrpkj = $this->input->get_post('kj');
			$depanmentor = $value->nama_depan;
			$belakangmentor = $value->nama_belakang;
			$jkmentor = $value->jenis_kelamin;
			$hpmentor = $value->hp;
			$path = "haha";
			$this->m_mentor->insert($nrpmentor,$nrpkj,$depanmentor,$belakangmentor,$jkmentor,$hpmentor, $path);
		}
			redirect(base_url()."mentor/applicant");
	}
}
