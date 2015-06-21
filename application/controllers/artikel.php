<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class artikel extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    } 
	public function index()
	{
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
			echo $artikel_id;
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
			redirect('artikel');
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
        //&lt;p&gt;MU&lt;/p&gt;
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */