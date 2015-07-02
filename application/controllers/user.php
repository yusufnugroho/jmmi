<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

        public function __construct() {
		parent::__construct();
                $this->load->helper('url');
                $this->load->model('m_mentor');
		$this->load->model('m_mente');
		$this->load->model('m_dosen');
		$this->load->model('m_mentor');
		$this->load->model('m_kj');
		$this->load->model('m_user');
	}
        public function index()
        {
            /*
            * Check Session*/
            $session = array();
            $session[] = $this->session->userdata('akses');
            if (empty($session)) redirect('welcome/logout');
            
            $this->load->view("dashboard/header");
            $this->load->view("dashboard/navbar");
            
            //print_r($this->session->userdata);
            //die();
            //
            //MENTE
            if($session[0]=="mente")
            {   
                $session[] = $this->session->userdata('id');
                $session[] = $this->session->userdata('nama_depan')." ".$this->session->userdata('nama_belakang');
                $session[] = $this->session->userdata('JK_MENTE');
                $session[] = $this->session->userdata('TELEPON_MENTE');
                $session[] = $this->session->userdata('NILAI_MENTE');
                $session[] = $this->session->userdata('STATUS_MENTE');

                //$session[] = $this->session->userdata('nama_belakang');
                
                
                $session[] = $this->session->userdata('NRP_MENTOR');
                //search mentor
                $tempMentor = $this->session->userdata('NRP_MENTOR');
                //(table,where)
                $where = array('NRP_MENTOR' => $tempMentor);
                $dataMentor = $this->m_mentor->select_where('mentor',$where);
                
                $dataMentor = $dataMentor[0];
                $namaMentor = $dataMentor['NAMA_DEPAN_MENTOR']." ".$dataMentor['NAMA_BELAKANG_MENTOR'];
                $nrpMentor = $dataMentor['NRP_MENTOR'];
                $teleponMentor = $dataMentor['TELEPON_MENTOR'];
                $statusMentor = $dataMentor['STATUS_MENTOR'];
               
                //echo $namaMentor." ".$nrpMentor." ".$teleponMentor." ".$statusMentor;
                $session[] = $namaMentor;
                $session[] = $teleponMentor;
                $session[] = $statusMentor;
                

                
                        
                        
                $session[] = $this->session->userdata('NIP_DOSEN');
                //search dosen
                $tempDosen = $this->session->userdata('NIP_DOSEN');
                //(table.where)
                $where = array('NIP_DOSEN' => $tempDosen);
                $dataDosen = $this->m_dosen->select_where('dosen',$where);
                
                $dataDosen = $dataDosen[0];
                $namaDosen = $dataDosen['NAMA_DEPAN_DOSEN']." ".$dataDosen['NAMA_BELAKANG_DOSEN'];
                $teleponDosen = $dataDosen['TELEPON_DOSEN'];
                $statusDosen = $dataDosen['STATUS_DOSEN'];

                $session[] =$namaDosen;
                $session[] =$teleponDosen;
                $session[] =$statusDosen;
                
                print_r($session);
                //die();                
                
                
                //DEBUG
                //
                //$id = $session[1];
                //$where = array('NRP_MENTE' => $id);
                //table | Condition Where
                //$data['mente'] = $this->m_user->select_where("mente",$where);
                //
                //
                //END DEBUG
                
                $data['session'] = $session;
                $this->load->view("user/mente",$data);
            }
            $this->load->view('dashboard/footer');
        }
        
}