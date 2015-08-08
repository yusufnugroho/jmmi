<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class agenda extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    } 
	public function index()
	{
        /*
         * Check Session*/ 
        $session = array();
		$session[] = $this->session->userdata('akses');
		if (empty($session)) redirect('welcome/logout');
                        
		$this->load->model("m_agenda");
		$data['agenda'] = $this->m_agenda->getTable('agenda');
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/header');

        if($session[0]=="mente")
        {   
            $this->load->view("dashboard/mente/navbar");
        	$this->load->view('agenda/mente/indexagenda',$data);
        }
        //Mentor
        if($session[0]=="mentor")
        {   
            $this->load->view("dashboard/mentor/navbar");
            $this->load->view("agenda/indexagenda",$data);
        }
        //KJ
        if($session[0]=="kj")
        {
            $this->load->view("dashboard/kj/navbar");
            $this->load->view("agenda/mente/indexagenda",$data);
        }
        if($session[0]=="dosen")
        {
            $this->load->view("dashboard/dosen/navbar");
            $this->load->view("agenda/mente/indexagenda",$data);
        }
		$this->load->view('dashboard/footer');
	}

	function add()
	{
		$this->load->model("m_agenda");
		$get_agenda_id = $this->m_agenda->getID('agenda');
		$agenda_id = 0;
		foreach ($get_agenda_id as $key) {
			$agenda_id = $key['ID_AGENDA'];
		}
		$agenda_id++;
		$isi_agenda = $this->input->post('isiagenda');
		$tanggal_agenda = $this->input->post('tanggalagenda');
		$tempat_agenda = $this->input->post('tempatagenda');
		$data_agenda=array(
			'ID_AGENDA' => $agenda_id,
			'ISI_AGENDA' => $isi_agenda,
			'TANGGAL_AGENDA' => $tanggal_agenda,
			'TEMPAT_AGENDA' => $tempat_agenda,
		);
		$res=$this->m_agenda->insert('agenda',$data_agenda);
		
		if ($res>=1){
			redirect('agenda');
		}
		else {
			echo "Something error, try again later";
		}
	}

	function addagenda()
	{
		$this->load->model('m_agenda');
                $this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar');
		$this->load->view('agenda/addagenda');
		$this->load->view('dashboard/footer');
	}
         function deleteAgenda($id){
            $this->load->model('m_agenda');
            $this->m_agenda->deleteID('agenda',$id);
            $this->index();
            
        }
}