<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mente extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_mentor');
		$this->load->model('m_mente');
		$this->load->model('m_dosen');
        $this->load->model('m_nilai');
	}

	public function index($notification = '')
	{
        /*
         * Check Session*/
        $session[] = $this->session->userdata('akses');
        if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        //echo $NIP_DOSEN;
        $data['session'] = $session[0];
        $data['notification'] = $notification;
        //Get Data Mente Where
        if($data['session']=="dosen"){ 
            $NIP_DOSEN = $this->session->userdata('1');
            $table = "mente";
            $where = array('NIP_DOSEN' => $NIP_DOSEN, );
            $data['mente'] = $this->m_mente->select_where_dosen($NIP_DOSEN);
        }
        else{
            $data['mente'] = $this->m_mente->getDataMente();
        }
        //print_r($data['mente']);
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar',$data);
        $this->load->view('mente/indexMente',$data);
        $this->load->view('dashboard/footer');
    }
    public function addmente($notification = '')
    {		
        /*
         * Check Session*/ 
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
    	$data['mentor'] = $this->m_mentor->getDataMentorActive();
    	$data['dosen'] = $this->m_dosen->getDataDosen();
        $data['notification'] = $notification;
    	$this->load->view('dashboard/header');
    	$this->load->view('dashboard/navbar', $data);
    	$this->load->view('mente/addMente',$data);
    	$this->load->view('dashboard/footer');
    }
    public function update($NRP)
    {
        /*
         * Check Session*/
        $session[] = $this->session->userdata('akses');
        //print_r($session);


        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
    	$data['all'] = $this->m_mente->getData($NRP);
    	$data['mentor'] = $this->m_mentor->getDataMentorActive();
    	$data['dosen'] = $this->m_dosen->getDataDosenActive();
    	$this->load->view('dashboard/header');
    	$this->load->view('dashboard/navbar', $data);
    	$this->load->view('mente/updateMente',$data);
    	$this->load->view('dashboard/footer');
    }
    public function updateNilai($nrp)
    {
        /*
         * Check Session*/ 
        $session[] = $this->session->userdata('akses');
		if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
    	$data['mente'] = $this->m_mente->getData($nrp);
    	$this->load->view('dashboard/header');
    	$this->load->view('dashboard/navbar', $data);
    	$this->load->view('mente/updateNilai',$data);
    	$this->load->view('dashboard/footer');
    }
    public function nilaiBaru($nrp){

        // SESSION CHECK
        $session[] = $this->session->userdata('akses');
        if (!empty($session) && $session[0] == "") redirect('welcome/logout');
        $data['session'] = $session[0];
        $data['mente'] = $this->m_mente->getData($nrp);

        // GET EXISTING NILAI FROM DATABASE
        $data['existed_nilai'] = $this->m_nilai->select_where('nilai', 
            array("nrp_mente"=>$nrp,)
            );
        $data['res_mente'] = $this->m_nilai->select_where('mente', 
                array('NRP_MENTE' => $nrp));

        if (empty($data['existed_nilai'])){
            // INITIALIZE NILAI IF DATA NOT EXIST
            $this->m_nilai->insert('nilai', 
                array('nrp_mente' => $nrp,
                    
                    ));

            // ASSIGN INITIALIZED NILAI TO DATA
            $data['existed_nilai'] = $this->m_nilai->select_where('nilai',
                array('NRP_MENTE' => $nrp,
                    
                    )
                );
        }
        foreach ($data['existed_nilai'][0] as $key => $value) {
            if (is_null($value)) $data['existed_nilai'][0][$key] = 0;
        }
        // CALL VIEW
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar', $data);
        $this->load->view('mente/nilaibaru',$data);
        $this->load->view('dashboard/footer');
    }

    public function active($nrp)
    {
    	$this->m_mente->active($nrp);
    	$this->index();
    }
    public function deactive($nrp)
    {
    	$this->m_mente->deactive($nrp);
    	$this->index();
    }
    public function Hapus($nrp)
    {
    	$this->m_mente->hapusMente($nrp);
    	$this->index();
    }

    public function insertmente()
    {
        $duplicate_mente = $this->m_mente->select_where('mente', array("NRP_MENTE" => $this->input->post('nrpmente')));
        if (empty($duplicate_mente)){
        	$nrpmente = $this->input->post('nrpmente');
        	$nrpmentor = $this->input->post('nrpmentor');
        	$nipdosen = $this->input->post('nipdosen');
        	$depanmente = $this->input->post('frontname');
        	$belakangmente = $this->input->post('endname');
        	$jkmente = $this->input->post('jkmente');
        	$hpmente = $this->input->post('hpmente');
        	$this->m_mente->insert($nrpmente,$nrpmentor,$nipdosen,$depanmente,$belakangmente,$jkmente,$hpmente);
        	$this->index('success');
        }else {
            $this->addMente('duplicate');
        }
    }
    public function updatemente($nrpmente)
    {
        $session[] = $this->session->userdata('akses');
        if($session[0]=="admin" ||$session[0]=="kj")
        {
        	$nrpmentor = $this->input->post('nrpmentor');
        	$nipdosen = $this->input->post('nipdosen');
        	$depanmente = $this->input->post('frontname');
        	$belakangmente = $this->input->post('endname');
        	$hpmente = $this->input->post('hpmente');
        	$jkmente = $this->input->post('jkmente');
            //$this->m_mente->update($nrpmente,$nrpmentor,$nipdosen,$depanmente,$belakangmente,$hpmente,$jkmente);
    	    //Update

            $set    = array(    'NRP_MENTOR' => $nrpmentor,
                                'NIP_DOSEN' => $nipdosen,
                                'NAMA_DEPAN_MENTE' => $depanmente,
                                'NAMA_BELAKANG_MENTE' => $belakangmente,
                                'JK_MENTE' => $hpmente,
                                'TELEPON_MENTE' => $jkmente,
                                );
            $where  = array('NRP_MENTE' => $nrpmente, );
            $table  = "mente";
            //update data mente menggunakan method baru(set,where,table)

            $query = $this->m_mente->updateBaru($set,$where,$table);
            if($query)
            {
                echo '<script>alert("Data Mente Berhasil di Perbaharui.")</script>';
                 redirect('mente', 'refresh');
            }
            else{
                echo '<script>alert("Maaf, Data Mente Gagal di Perbaharui.")</script>';
                 redirect('mente', 'refresh');
            }

        }
        $this->index();
    }
    public function updateNilaiReady($nrpmente)
    {
    	$nilai = $this->input->post('nilai');
    	$this->m_mente->updateNilai($nrpmente,$nilai);
    	$this->index();
    }
    public function UpNilai_Score(){
        $form_set = array();
        foreach ($_POST as $post_key => $post_value) {
            if (substr($post_key, 0, 5) == "form_"){
                $form_set[strtoupper(substr($post_key, 5, strlen($post_key)))] = $post_value;
            }
        }
        $this->m_mente->updateBaru($form_set, 
            array('id_nilai' => $this->input->post('id_nilai')),
            'nilai');
        $this->UpdateFinalScore($this->input->post('id_nilai'));
        redirect($this->input->post('return_link'));
    }

    public function UpdateFinalScore($id_nilai){
        $res_nilai = $this->m_nilai->select_where('nilai', 
            array( 'id_nilai' => $id_nilai,
            ));

        $total_screening = intval($res_nilai[0]['TES_TULIS']) + 
            intval($res_nilai[0]['QUISIONER']) + 
            intval($res_nilai[0]['TILAWAH']);
        $total_event = intval($res_nilai[0]['E_GOM']) + 
            intval($res_nilai[0]['E_MA']) + 
            intval($res_nilai[0]['E_MK']);
        $total_kehadiran = 0;
        foreach ($res_nilai[0] as $key => $value) {
            if (substr($key, 0, 9) == 'KEHADIRAN'){
                $total_kehadiran = $total_kehadiran + intval($value);
            }
        }
        $total_uas = intval($res_nilai[0]['UAS_TULIS']) + 
            intval($res_nilai[0]['UAS_KUIS']);
        $total_nilai = (0.15*$total_event/3*100) + (0.40*$total_kehadiran/10*100) + (0.15*intval($res_nilai[0]['UAS_TILAWAH'])) + (0.30*($total_uas/2));
        $huruf_nilai = "E";
        if ($total_nilai > 81 && $total_nilai < 100) $huruf_nilai = "A";
        else if ($total_nilai > 71 && $total_nilai < 80) $huruf_nilai = "AB";
        else if ($total_nilai > 66 && $total_nilai < 70) $huruf_nilai = "B";
        else if ($total_nilai > 61 && $total_nilai < 65) $huruf_nilai = "BC";
        else if ($total_nilai > 51 && $total_nilai < 60) $huruf_nilai = "C";
        else if ($total_nilai > 41 && $total_nilai < 50) $huruf_nilai = "D";
        $this->m_mente->updateBaru(
            array('NILAI_MENTE' => $total_nilai,
                'HURUF_MENTE' => $huruf_nilai,
                ),
            array('NRP_MENTE' => $res_nilai[0]['nrp_mente']),
            'mente'
            );
    }
}

