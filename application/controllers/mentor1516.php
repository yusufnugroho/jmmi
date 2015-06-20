<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mentor1516 eXtends CI_Controller{
	public function __construct()
	{
		# code...
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		# code...
        $this->load->view('applymentor/formDaftarMentor');
	}
	public function doapply()
	{
		# code...
		$this->load->model('m_apply');
		$data = array(
			'nrp' => $this->input->post('nrp'),
			'nama_depan' => $this->input->post('nama_depan'),
			'nama_belakang' => $this->input->post('nama_belakang'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'email' => $this->input->post('email'),
			'hp' => $this->input->post('hp'),
			'ipk' => $this->input->post('ipk'),
			'prestasi' => $this->input->post('prestasi'),
			'mentor_sekarang' => $this->input->post('mentor_sekarang'),
			'kondisi' => $this->input->post('kondisi'),
			'wajib' => $this->input->post('wajib'),
			'tilawatil' => $this->input->post('tilawatil'),
			'wirid' => $this->input->post('wirid'),
			'dhuha' => $this->input->post('dhuha'),
			'malam' => $this->input->post('malam'),
			'bacaan' => $this->input->post('bacaan'),
			'motivasi' => $this->input->post('motivasi'),
			'saran' => $this->input->post('saran'),
			'komitmen' => $this->input->post('komitmen')
		);
		$this->m_apply->insert('apply_mentor', $data);
                $this->load->view('applymentor/formDaftarMentor');
	}

	public function applicant()
	{
		# code...
		$this->load->model('m_apply');
		$data['applicant'] = $this->m_apply->getall('apply_mentor');
               // $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar'); 
		$this->load->view('applymentor/list',$data);
                //$this->load->view('dashboard/footer');
	}
}
?>