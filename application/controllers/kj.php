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

	public function index($notification = '')
	{
        /*
         * Check Session*/ 
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
		$data['kj'] = $this->m_kj->getDataKJ();
		$data['notification'] = $notification;
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar', $data);
		$this->load->view('kj/indexKJ',$data);
        $this->load->view('dashboard/footer');
	}
	public function addkj($notification = '')
	{		
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
		$data['mentor'] = $this->m_mentor->getDataMentor();
		$data['dosen'] = $this->m_dosen->getDataDosen();
		$data['notification'] = $notification;
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar', $data);
		$this->load->view('kj/addKJ',$data);
        $this->load->view('dashboard/footer');
        }
	public function update($NRP)
	{
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
        $data['kj'] = $this->m_kj->getData($NRP);
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar', $data);
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
		$duplicate_kj = $this->m_kj->select_where('kj', array("NRP_KJ" => $this->input->post('nrpkj')));
		if (empty($duplicate_kj)){
			$nrpkj = $this->input->post('nrpkj');
			$depan = $this->input->post('frontname');
			$belakang = $this->input->post('endname');
			$jkkj = $this->input->post('jkkj');
			$hpkj = $this->input->post('hpkj');
			$this->m_kj->insert($nrpkj,$depan,$belakang,$jkkj,$hpkj);
			$this->index('success');
		}
		else $this->addkj('duplicate');
	}
	public function updatekj($nrpkj)
	{
		$update_where = array('NRP_KJ' => $nrpkj);
		$update_data = array(
			'NRP_KJ'=>$nrpkj,
			'NAMA_DEPAN_KJ' => $this->input->post('frontname'),
			'NAMA_BELAKANG_KJ' => $this->input->post('endname'),
			'TELEPON_KJ' => $this->input->post('hpkj'),
			'JK_KJ' => $this->input->post('jkkj'),
			);
		$this->m_kj->update('kj', $update_where, $update_data);
		$this->index();
	}
}

