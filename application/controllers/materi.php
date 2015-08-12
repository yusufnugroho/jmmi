<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materi extends CI_Controller {
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
		$this->load->model("m_materi");
		$data['materi'] = $this->m_materi->gettable('materi');
		$data['file'] = $this->m_materi->gettable('file');
		$data['session'] = $session[0];
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar', $data);
        $this->load->view('materi/indexmateri', $data);
        $this->load->view('dashboard/footer');
	}

	function create()
	{
		$target_Path = NULL;
		print_r($_FILES);
		if ($_FILES['userFile']['name'] != NULL)
		{
			$target_Path = "File/";
			$string = basename( $_FILES['userFile']['name'] );
			$string = str_replace(" ","-", $string);
			$target_Path = $target_Path.$string;
		}
		$this->load->model("m_materi");
		$get_materi_id = $this->m_materi->getID('materi');
		$materi_id = 0;
		foreach ($get_materi_id as $key) {
			$materi_id = $key['ID_MATERI'];		}
		$materi_id++;
		$judul_materi =$this->input->post('title');
		$isi_materi = htmlspecialchars($this->input->post('articlebody'));
		$tanggal_materi = date("y-m-d");
		$penulis_materi = $this->session->userdata('nama_depan')." ".$this->session->userdata('nama_belakang');
		$tag_materi = $this->input->post('tag');
		$data_materi=array(
			'ID_MATERI' => $materi_id,
			'JUDUL_MATERI' => $judul_materi,
			'ISI_MATERI' => $isi_materi,
			'TANGGAL_MATERI' => $tanggal_materi,
			'PENULIS_MATERI' => $penulis_materi,
			'TAG_MATERI' => $tag_materi,
			'THUMBNAIL_MATERI' => $target_Path,
		);
		if($this->m_materi->insert('materi', $data_materi))
		{
			if ($target_Path != NULL) {
				move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
			}
			  echo '<script language="javascript">';
			  echo 'alert("File berhasil ditambahkan");';
			  echo '</script>';
		}
		else
		{
			  echo '<script language="javascript">';
			  echo 'alert("Gagal menyimpan file");';
			  echo '</script>';
		}
		redirect('materi');
	}

	public function doUpload()
	{
		$target_Path = NULL;
		if ($_FILES['userFile']['name'] != NULL)
		{
			$target_Path = "File/";
			$string = basename( $_FILES['userFile']['name'] );
			$string = str_replace(" ","-", $string);
			$target_Path = $target_Path.$string;
		}
		$this->load->model('m_materi');

		$tanggal_materi = date("y-m-d");
		$penulis_materi = $this->session->userdata('nama_depan')." ".$this->session->userdata('nama_belakang');
		$data = array(
		    'JUDUL' => $_POST['judul'],
		    'path' => $target_Path,
			'TAG' => $_POST['tag'],
			'TANGGAL_MATERI' => $tanggal_materi,
			'PENULIS_MATERI' => $penulis_materi,
		);
		if($this->m_materi->insertFile($data))
		{
			if ($target_Path != NULL) {
				move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
			}
			  echo '<script language="javascript">';
			  echo 'alert("File berhasil ditambahkan");';
			  echo '</script>';
		}
		else
		{
			  echo '<script language="javascript">';
			  echo 'alert("Gagal menyimpan file");';
			  echo '</script>';
		}
		$this->index();
	}
	public function unggahmateri()
	{
        /*
         * Check Session*/ 
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
		$this->load->model('m_materi');
		$data['tag'] = $this->m_materi->getTag('tag_materi');
        $this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar', $data);
		$this->load->view('materi/unggahmateri', $data);
		$this->load->view('dashboard/footer');
	}
	function buatmateri()
	{
        /*
         * Check Session*/ 
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
		$this->load->model('m_materi');
		$data['tag'] = $this->m_materi->getTag();
        $this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar', $data);
		$this->load->view('materi/buatmateri', $data);
		$this->load->view('dashboard/footer');
	}
	public function showFile($id)
	{
        /*
         * Check Session*/ 
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
		$this->load->model("m_materi");
		$where = array('ID' => $id);
		$data['file'] = $this->m_materi->select_where('file',$where);
        $this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar', $data);
		$this->load->view('materi/lihat', $data);
		$this->load->view('dashboard/footer');
	}
	public function hapusfile($id)
	{
		$this->load->model("m_materi");
		$where = array('ID' => $id);
		$data['file'] = $this->m_materi->delete('file',$where);
		redirect('materi/');
                //$this->index();
	}
	public function hapustulisan($id)
	{
		$this->load->model("m_materi");
		$where = array('ID_MATERI' => $id);
		$data['tulisan'] = $this->m_materi->delete('materi',$where);
		redirect('materi/');
                //$this->index();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */