<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller {

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
         /*
         * Check Session*/
     	$session = array();
        $session[] = $this->session->userdata('akses');
        $session[] = $this->session->userdata('id');
        $session[] = $this->session->userdata('nama_depan');
        $session[] = $this->session->userdata('nama_belakang');
        //print_r($session);
        //die();
                
		if (empty($session)) redirect('welcome/logout');
		$data['session'] = $session[0];
		$data['dosen'] = $this->m_dosen->getDataDosen();
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar', $data);
		$this->load->view('dosen/indexDosen',$data);
        $this->load->view('dashboard/footer');
	}
	public function addDosen()
	{	
        $session = array();
        $session[] = $this->session->userdata('akses');
		if (empty($session)) redirect('welcome/logout'); 
		$data['session'] = $session[0];

        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar', $data);
		#$this->load->view('kj/addkj',$data);
        $this->load->view('dosen/addDosen', $data);
        $this->load->view('dashboard/footer');
        }
	public function update($nip)
	{
        $session = array();
        $session[] = $this->session->userdata('akses');
		if (empty($session)) redirect('welcome/logout'); 
		$data['session'] = $session[0];

		$data['dosen'] = $this->m_dosen->getData($nip);
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar', $data);
		$this->load->view('dosen/updateDosen',$data);
        $this->load->view('dashboard/footer');
	}
    public function active($nip)
	{
		$this->m_dosen->active($nip);
		$this->index();
	}
    public function deactive($nip)
	{
		$this->m_dosen->deactive($nip);
		$this->index();
	}
	public function Hapus($nip)
	{
		$this->m_dosen->hapus($nip);
		$this->index();
	}

	public function insertDosen()
	{
		$nip = $this->input->post('nip');
		$depan = $this->input->post('frontname');
		$belakang = $this->input->post('endname');
		$hpDosen = $this->input->post('hpdosen');
		$this->m_dosen->insert($nip,$depan,$belakang,$hpDosen);
		$this->index();
	}
	public function updateDosen($nrpkj)
	{
		$nip = $this->input->post('nipdosen');
		$depan = $this->input->post('frontname');
		$belakang = $this->input->post('endname');
		$hp = $this->input->post('hpkj');
		$this->m_dosen->update($nip,$depan,$belakang,$hp);
		$this->index();
	}
}

