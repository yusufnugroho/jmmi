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
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
		$data['session'] = $session[0];
		$this->load->model("m_agenda");
		$data['agenda'] = $this->m_agenda->getTable('agenda');
		$data['session'] = $session[0];
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar', $data);
        $this->load->view('agenda/indexagenda', $data);
		$this->load->view('dashboard/footer');
	}

	function add()
	{
		// START UPLOAD POSTER AGENDA
		$target_Path = NULL;
		if ($_FILES['poster']['name'] != NULL)
		{
			$target_Path = "File/";
			$string = basename( $_FILES['poster']['name'] );
			$string = str_replace(" ","-", $string);
			$target_Path = $target_Path.$string;
		}
		if ($target_Path != NULL) {
			move_uploaded_file( $_FILES['poster']['tmp_name'], $target_Path );
		}
		// END UPLOAD POSTER AGENDA
		// START INSERT DATA TO DATABASE
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
		$deskripsi_agenda = $this->input->post('deskripsiagenda');
		$data_agenda=array(
			'ID_AGENDA' => $agenda_id,
			'ISI_AGENDA' => $isi_agenda,
			'TANGGAL_AGENDA' => $tanggal_agenda,
			'TEMPAT_AGENDA' => $tempat_agenda,
			'PATH_AGENDA' => $target_Path,
			'DESKRIPSI_AGENDA' => $deskripsi_agenda,
		);
		$res=$this->m_agenda->insert('agenda',$data_agenda);
		//END INSERT DATA TO DATABASE

		if ($res>=1){
			redirect('agenda');
		}
		else {
			echo "Something error, try again later";
		}
	}

	function addagenda()
	{
        /*
         * Check Session*/ 
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
		$this->load->model('m_agenda');
        $this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar', $data);
		$this->load->view('agenda/addagenda', $data);
		$this->load->view('dashboard/footer');
	}
     function deleteAgenda($id){
        $this->load->model('m_agenda');
        $this->m_agenda->deleteID('agenda',$id);
        $this->index();
        
    }
}