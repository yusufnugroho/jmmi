<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class artikel extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
        $this->load->model('m_artikel');
    } 
	public function index()
	{
                /*
                 * Check Session*/ 
                $session_check = $this->session->userdata('akses');
		if (empty($session_check)) redirect('welcome/logout');
                
		$this->load->model("m_artikel");
		$data['artikel'] = $this->m_artikel->gettable('artikel');
                $this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar');
		$this->load->view('artikel/indexartikel', $data);
		$this->load->view('dashboard/footer');
	}

	function create()
	{
		$this->load->model("m_artikel");
		$get_artikel_id = $this->m_artikel->getID('artikel');
		$artikel_id = 0;
		foreach ($get_artikel_id as $key) {
			$artikel_id = $key['ID_ARTIKEL'];
		}
		$artikel_id++;
		$judul_artikel =$this->input->post('title');
		$isi_artikel = htmlspecialchars($this->input->post('articlebody'));
		$tanggal_artikel = date("y-m-d");
		$penulis_artikel = $this->session->userdata('nama_depan')." ".$this->session->userdata('nama_belakang');
		$data_artikel=array(
			'ID_ARTIKEL' => $artikel_id,
			'JUDUL_ARTIKEL' => $judul_artikel,
			'ISI_ARTIKEL' => $isi_artikel,
			'TANGGAL_ARTIKEL' => $tanggal_artikel,
			'PENULIS_ARTIKEL' => $penulis_artikel
		);
		$res=$this->m_artikel->insert('artikel',$data_artikel);
		
		if ($res>=1){
			redirect('artikel/listArtikel');
		}
		else {
			echo "Something error, try again later";
		}
	}

	function buatartikel()
	{
		$this->load->model('m_artikel');
        $this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar');
		$this->load->view('artikel/buatartikel');
		$this->load->view('dashboard/footer');
	}
        function testArtikel()
	{
		$this->load->model('m_artikel');
        $this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar');
		$this->load->view('artikel/testArtikel');
		$this->load->view('dashboard/footer');
	}
    
    function listArtikel()
    {
        $session = array();
        $session[] = $this->session->userdata('akses');
        if (empty($session)) redirect('welcome/logout');

        $this->load->model('m_artikel');
        $data['data'] = $this->m_artikel->getTable("artikel");
        $this->load->view('dashboard/header');
        if($session[0]=="mente")
        {   
            $this->load->view("dashboard/mente/navbar");
        	$this->load->view('artikel/mente/listArtikel',$data);
        }
        //Mentor
        if($session[0]=="mentor")
        {   
            $this->load->view("dashboard/mentor/navbar");
            $this->load->view("artikel/listArtikel",$data);
        }
        //KJ
        if($session[0]=="kj")
        {
            $this->load->view("dashboard/kj/navbar");
            $this->load->view("user/mente/listArtikel",$data);
        }
        if($session[0]=="dosen")
        {
            $this->load->view("dashboard/dosen/navbar");
            $this->load->view("user/mente/listArtikel",$data);
        }
        $this->load->view('dashboard/footer');
    }
    
    function deleteArtikel($id){
        $this->load->model('m_artikel');
        $this->m_artikel->deleteID('artikel',$id);
        $this->listArtikel();
        
    }

    function showArtikel($id){
        $this->load->model('m_artikel');
        $data['data'] = $this->m_artikel->getArtikelByID("artikel",$id);
        //die();
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar');
        $this->load->view('artikel/showArtikel',$data);
        $this->load->view('dashboard/footer');
    }
        
}