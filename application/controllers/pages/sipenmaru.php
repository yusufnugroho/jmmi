<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class sipenmaru eXtends CI_Controller{
	public function __construct()
	{
		# code...
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_apply');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->model("m_artikel");
		$session_check = $this->session->userdata('akses');
		$isLogin = "no";
		$session_data = array();
		if (!empty($session_check)){
			$isLogin = "yes";
			$session_data['ID'] = $this->session->userdata('1');
			$session_data['Nama'] = $this->session->userdata('2');
		}
		$data = array();
		$data['isLogin'] = $isLogin;
		$data['session_data'] = $session_data;
		$data['notification'] = "clear";
		$this->load->view('frontend/header/header', $data);
		$this->load->view('frontend/content/sipenmaru/notification', $data);
		$this->load->view('frontend/content/sipenmaru/formDaftarMentor', $data);
		$this->load->view('frontend/footer/footer');

	}
	public function doapply()
	{
		// CHECK THE SEASON OWNERS
		$session_check = $this->session->userdata('akses');
		$isLogin = "no";
		$session_data = array();
		if (!empty($session_check)){
			$isLogin = "yes";
			$session_data['ID'] = $this->session->userdata('1');
			$session_data['Nama'] = $this->session->userdata('2');
		}
		$data = array();
		$data['isLogin'] = $isLogin;
		$data['session_data'] = $session_data;
		$data['notification'] = "none";
		$this->load->view('frontend/header/header', $data);

		// CHECK EXISTED NRP
		$this->load->model('m_apply');
		$this->load->model('m_mentor');
        $cek_apply = $this->m_apply->select_where('apply_mentor', array("nrp" => $this->input->post('nrp')));
        $cek_mentor = $this->m_mentor->select_where('mentor', array("NRP_MENTOR" => $this->input->post('nrp')));

        // INPUT POST
        $data['data'] = array(
			'nrp' => $this->input->post('nrp'),
            'password' => $this->input->post('password'),
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

        if (empty($cek_data) && empty($cek_mentor)){
	        $p = $this->input->post('password');
	        $cp = $this->input->post('confirmPassword');
	        
		    if($p == $cp){
		    	// INPUT THE DATABASE
		        $this->m_apply->insert('apply_mentor', $data['data']);
		        $data['notification'] = "success";
		    }
		    else {
				// PASSWORD DIDNT MATCH
				$data['notification'] = "password_nomatch";
		    }
		}
		else {
			// NRP ALREADY EXISTED
			$data['notification'] = "nrp_exist";
	    }
	    $this->load->view('frontend/content/sipenmaru/notification', $data);
	    $this->load->view('frontend/content/sipenmaru/formDaftarMentor', $data);
		$this->load->view('frontend/footer/footer');
	}
	public function applicant()
		{
			# code...
			$this->load->model('m_apply');
			$data['applicant'] = $this->m_apply->getall('apply_mentor');
	       // $this->load->view('dashboard/header');
	        $this->load->view('dashboard/navbar'); 
			$this->load->view('applymentor/list',$data);
        }
        
    	//$this->load->view('dashboard/footer');
	public function detailMentorSipenmaru($id){
		
		$table = "apply_mentor";
		$where = array('id_apply_mentor' => $id, );
		$data['data_apply_mentor'] = $this->m_apply->select_where($table,$where);
		//print_r($data);
		//die();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar');
		$this->load->view('applymentor/detail2',$data);	
		$this->load->view('dashboard/footer');
	}
}
?>