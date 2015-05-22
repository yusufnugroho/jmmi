<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class agenda extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    } 
	public function index()
	{
		$this->load->model("m_agenda");
		$data['agenda'] = $this->m_agenda->gettable('agenda');
        $this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar');
		$this->load->view('agenda/indexagenda', $data);
		$this->load->view('dashboard/footer');
	}

	function add()
	{
		$this->load->model("m_agenda");
		$get_agenda_id = $this->m_agenda->getID('agenda');
		$agenda_id = 0;
		foreach ($get_agenda_id as $key) {
			$agenda_id = $key['ID_AGENDA'];
			echo $agenda_id;
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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */