<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mentor extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_kj');
		$this->load->model('m_mentor');
	}

	public function index($notification='')
	{                
        /*
         * Check Session*/ 
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
        $data['mentor'] = array();
        if ($this->session->userdata('akses') == 'kj') 
        	$data['mentor'] = $this->m_mentor->select_where('mentor',
        		array('NRP_KJ' => $this->session->userdata('1')));
        else 
        	$data['mentor'] = $this->m_mentor->get_all('mentor');
		$data['notification'] = $notification;
		$this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar', $data);
        $this->load->view('mentor/indexMentor',$data);
        $this->load->view('dashboard/footer');
	}
	public function addmentor($notification = '')
	{		
        /*
         * Check Session*/ 
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
        $data['kj'] = $this->m_kj->getDataKJActive();
        $data['notification'] = $notification;
        $data['status_kj'] = $this->session->userdata('5');
        $data['akses'] = $this->session->userdata('akses');
        $data['my_nrp'] = $this->session->userdata('1');
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar', $data);
		$this->load->view('mentor/addMentor',$data);
        $this->load->view('dashboard/footer');
	}
	public function update($NRP)
	{
        /*
         * Check Session*/ 
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
		$data['all'] = $this->m_mentor->getData($NRP);
        $data['kj'] = $this->m_kj->getDataKJActive();
		$this->load->view('./dashboard/header');
        $this->load->view('./dashboard/navbar', $data);
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
		
		$this->index();
	}
	public function insertmentor()
	{   
		$duplicate_mentor = $this->m_mentor->select_where('mentor', array("NRP_MENTOR" => $this->input->post('nrpmentor')));
		
		if (empty($duplicate_mentor)){
			$nrpmentor = $this->input->post('nrpmentor');
			$nrpkj = $this->input->post('nrpkj');
			$depanmentor = $this->input->post('frontname');
			$belakangmentor = $this->input->post('endname');
			$jkmentor = $this->input->post('jkmentor');
			$hpmentor = $this->input->post('hpmentor');
			$this->m_mentor->insert($nrpmentor,$nrpkj,$depanmentor,$belakangmentor,$jkmentor,$hpmentor, "");
			$this->index('success');
		}
		else {
			//$this->error_notification('mentor/addMentor' ,"duplicate");
			$this->addMentor("duplicate");
		}
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
        /*
         * Check Session*/ 
        $session[] = $this->session->userdata('akses');
        if (empty($session)) redirect('welcome/logout');
        $data['session'] = $session[0];
		$this->load->model('m_apply');
		$data['applicant'] = $this->m_apply->getall('apply_mentor');
		$data['kj'] = $this->m_apply->getall('kj');
        $this->load->view('dashboard/navbar', $data);
		$this->load->view('applymentor/list',$data);
	}
	public function detailMentorSipenmaru($id)
	{
	    /*
         * Check Session*/ 
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
		$table = "apply_mentor";
		$where = array('nrp' => $id, );
		$this->load->model('m_apply');
		$data['data_apply_mentor'] = $this->m_apply->select_where($table,$where);
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar', $data);
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
