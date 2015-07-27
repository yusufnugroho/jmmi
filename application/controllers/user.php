<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        /*
        * Check Session*/
        $session = array();
        $session[] = $this->session->userdata('akses');
        //print_r($this->session->userdata);die();
        if (empty($session)) redirect('welcome/logout');
                $this->load->helper('url');
                $this->load->model('m_mentor');
        $this->load->model('m_mente');
        $this->load->model('universal');
        $this->load->model('m_dosen');
        $this->load->model('m_mentor');
        $this->load->model('m_kj');
        $this->load->model('m_user');
    }
    public function index()
    {
        $session = array();
        $session[] = $this->session->userdata('akses');
        if (empty($session)) redirect('welcome/logout');
        $session = array();
        $session[] = $this->session->userdata('akses');
        $this->load->view("dashboard/header");
        $this->load->view("dashboard/navbar");
        
        if($session[0]=="mente")
        {   
            $session[] = $this->session->userdata('id');
            $session[] = $this->session->userdata('nama_depan')." ".$this->session->userdata('nama_belakang');
            $session[] = $this->session->userdata('JK_MENTE');
            $session[] = $this->session->userdata('TELEPON_MENTE');
            $session[] = $this->session->userdata('NILAI_MENTE');
            $session[] = $this->session->userdata('STATUS_MENTE');

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
            $field = array('NRP', 'Nama Lengkap', 'No. Telp', 'Jenis Kelamin', 'Nilai', 'Status','NRP Mentor', 'Nama Mentor', 'NRP KJ', 'Status Mentor', 'NIP Dosen', 'Nama Dosen', 'Telp. Dosen', 'Status Dosen');
            $foto = base_url()."assets/userfile/icon.png";
            $data['foto'] = $foto;
            $data['field'] = $field;
            $data['session'] = $session;
            $this->load->view("user/index",$data);
        }
        //Mentor
        if($session[0]=="mentor")
        {   
            $session[] = $this->session->userdata('1');
            $session[] = $this->session->userdata('2');
            $session[] = $this->session->userdata('3');
            $session[] = $this->session->userdata('4');
            $session[] = $this->session->userdata('5');
            $session[] = $this->session->userdata('6');
            
            $nrpKJ = $session[6];
            $where = array('NRP_KJ' => $nrpKJ);
            $dataKJ = $this->m_kj->select_where('kj',$where);
            $dataKJ = $dataKJ[0];

            $nrpMentor = $session[1];
            $dataMentor = $this->m_mentor->select_where('mentor', array('NRP_MENTOR' => $nrpMentor));
            $fotoMentor = $dataMentor[0]['path'];
            //print
            $namaKJ = $dataKJ['NAMA_DEPAN_KJ']." ".$dataKJ['NAMA_BELAKANG_KJ'];
            $teleponKJ = $dataKJ['TELEPON_KJ'];
            $statusKJ = $dataKJ['STATUS_KJ'];
            //echo $namaMentor." ".$nrpMentor." ".$teleponMentor." ".$statusMentor;
            $session[] = $namaKJ;
            $session[] = $teleponKJ;
            $session[] = $statusKJ;
            
            $field = array('NRP', 'Nama Lengkap', 'Jenis Kelamin', 'No. Telp', 'Status Mentor', 'hr', 'NRP KJ', 'Nama KJ', 'Telp. KJ', 'Status KJ');
            $foto = base_url()."assets/userfile/icon.png";
            if (!empty($fotoMentor)) $foto = base_url()."assets/userfile/".$fotoMentor;
            $data['foto'] = $foto;
            $data['field'] = $field;
            $data['session'] = $session;
            $this->load->view("user/index",$data);
        }
        //KJ
        if($session[0]=="kj")
        {
            $session[] = $this->session->userdata('1');
            $session[] = $this->session->userdata('2');
            $session[] = $this->session->userdata('3');
            $session[] = $this->session->userdata('4');
            $session[] = $this->session->userdata('5');
            $field = array('NRP', 'Nama Lengkap', 'No. Telp', 'Jenis Kelamin', 'Status');
            $foto = base_url()."assets/userfile/icon.png";
            $data['foto'] = $foto;
            $data['field'] = $field;
            $data['session'] = $session;
            $this->load->view("user/index",$data);
        }
        if($session[0]=="dosen")
        {
            $session[] = $this->session->userdata('1');
            $session[] = $this->session->userdata('2');
            $session[] = $this->session->userdata('3');
            $session[] = $this->session->userdata('4');
            $field = array('NIP', 'Nama Lengkap', 'Telepon', 'Status');
            $foto = base_url()."assets/userfile/icon.png";
            $data['foto'] = $foto;
            $data['field'] = $field;
            $data['session'] = $session;
            $this->load->view("user/index",$data);
        }
        $this->load->view('dashboard/footer');
    }
    public function settings($valid = 'yes'){
        /*SELECT USER ACCESS AND REQUIRED FORM INPUTS, THEN  DISPLAY*/
        $session = array();
        $session[] = $this->session->userdata('akses');
        $form_name = array();
        $form_type = array();
        $form_label = array();
        $form_value = array();
        if ($session[0] == 'dosen'){
            $dosen_value = $this->m_dosen->select_where('dosen', array("NIP_DOSEN" =>$this->session->userdata('1')));
            $dosen_value = $dosen_value[0];
            $form_name = array("NAMA_DEPAN_DOSEN", "NAMA_BELAKANG_DOSEN", "TELEPON_DOSEN", "PASSWORD_DOSEN");
            $form_type = array("text", "text", "text", "password");
            $form_label = array("Nama Depan", "Nama Belakang", "No. Telp", "Password");
            $form_value = array($dosen_value['NAMA_DEPAN_DOSEN'], $dosen_value['NAMA_BELAKANG_DOSEN'], $dosen_value['TELEPON_DOSEN'], '');
        }
        else if ($session[0] == 'kj'){
            $kj_value = $this->m_kj->select_where('kj', array("NRP_KJ" =>$this->session->userdata('1')));
            $kj_value = $kj_value[0];
            $form_name = array("NAMA_DEPAN_KJ", "NAMA_BELAKANG_KJ", "JK_KJ", "TELEPON_KJ", "PASSWORD_KJ");
            $form_type = array("text", "text", "text", "text", "password");
            $form_label = array('Nama Depan', 'Nama Belakang', 'Jenis Kelamin', 'No. Telp', 'Password');
            $form_value = array($kj_value['NAMA_DEPAN_KJ'], $kj_value['NAMA_BELAKANG_KJ'], $kj_value['JK_KJ'], $kj_value['TELEPON_KJ'], '');
        }
        else if ($session[0] == 'mentor'){
            $mentor_value = $this->m_mentor->select_where('mentor', array("NRP_MENTOR" =>$this->session->userdata('1')));
            $mentor_value = $mentor_value[0];
            $form_name = array("NAMA_DEPAN_MENTOR", "NAMA_BELAKANG_MENTOR", "jk_mentor", "TELEPON_MENTOR", "PASSWORD_MENTOR");
            $form_type = array("text", "text", "text", "text", "password");
            $form_label = array('Nama Depan', 'Nama Belakang', 'Jenis Kelamin', 'No. Telp', 'Password');
            $form_value = array($mentor_value['NAMA_DEPAN_MENTOR'], $mentor_value['NAMA_BELAKANG_MENTOR'], $mentor_value['jk_mentor'], $mentor_value['TELEPON_MENTOR'], '');
        }
        else if ($session[0] == 'mente'){
            $mente_value = $this->m_mente->select_where('mente', array("NRP_MENTE" =>$this->session->userdata('1')));
            $mente_value = $mente_value[0];
            $form_name = array("NAMA_DEPAN_MENTE", "NAMA_BELAKANG_MENTE", "JK_MENTE", "TELEPON_MENTOR", "PASS_MENTE");
            $form_type = array("text", "text", "text", "text", "password");
            $form_label = array('Nama Depan', 'Nama Belakang', 'Jenis Kelamin', 'No. Telp', 'Password');
            $form_value = array($mente_value['NAMA_DEPAN_MENTE'], $mente_value['NAMA_BELAKANG_MENTE'], $mente_value['JK_MENTE'], $mente_value['TELEPON_MENTOR'], '');
        }
        $data['form_name'] = $form_name;
        $data['form_type'] = $form_type;
        $data['form_value'] = $form_value;
        $data['form_label'] = $form_label;
        $data['session'] = $session;
        $data['valid'] = $valid;
        $this->load->view("dashboard/header");
        $this->load->view("dashboard/navbar");
        $this->load->view("user/settings",$data);
        $this->load->view('dashboard/footer');
    }

    public function update($type){

        /* UPDATE DB*/
        $form_name = array();
        $form_label = array();
        $content = array();
        $where = array();
        $validation_check = array();
        if ($type == 'dosen'){
            $dosen_value = $this->m_dosen->select_where('dosen', array("NIP_DOSEN" =>$this->session->userdata('1')));
            $where = $dosen_value[0];
            $form_name = array("NAMA_DEPAN_DOSEN", "NAMA_BELAKANG_DOSEN", "TELEPON_DOSEN", "PASSWORD_DOSEN");
            $form_label = array("Nama Depan", "Nama Belakang", "No. Telp", "Password");
            $validation_check = $this->m_dosen->select_where('dosen', array('NIP_DOSEN' =>$this->session->userdata('1'), 'PASSWORD_DOSEN' => $_POST['PASSWORD_DOSEN']));
        }
        else if ($type == 'kj'){
            $kj_value = $this->m_kj->select_where('kj', array("NRP_KJ" =>$this->session->userdata('1')));
            $where = $kj_value[0];
            $form_name = array("NAMA_DEPAN_KJ", "NAMA_BELAKANG_KJ", "JK_KJ", "TELEPON_KJ", "PASSWORD_KJ");
            $form_label = array('Nama Depan', 'Nama Belakang', 'Jenis Kelamin', 'No. Telp');
            $validation_check = $this->m_kj->select_where('kj', array("NRP_KJ" =>$this->session->userdata('1'), 'PASSWORD_KJ' => $_POST['PASSWORD_KJ']));
        }
        else if ($type == 'mentor'){
            $mentor_value = $this->m_mentor->select_where('mentor', array("NRP_MENTOR" =>$this->session->userdata('1')));
            $where = $mentor_value[0];
            $form_name = array("NAMA_DEPAN_MENTOR", "NAMA_BELAKANG_MENTOR", "jk_mentor", "TELEPON_MENTOR", "PASSWORD_MENTOR");
            $form_label = array('Nama Depan', 'Nama Belakang', 'Jenis Kelamin', 'No. Telp');
            $validation_check = $this->m_mentor->select_where('mentor', array("NRP_MENTOR" =>$this->session->userdata('1'), 'PASSWORD_MENTOR' => $_POST['PASSWORD_MENTOR']));
        }
        else if ($type == 'mente'){
            $mente_value = $this->m_mente->select_where('mente', array("NRP_MENTE" =>$this->session->userdata('1')));
            $where = $mente_value[0];
            $form_name = array("NAMA_DEPAN_MENTE", "NAMA_BELAKANG_MENTE", "JK_MENTE", "TELEPON_MENTOR", "PASS_MENTE");
            $form_label = array('Nama Depan', 'Nama Belakang', 'Jenis Kelamin', 'No. Telp', 'Password');
            $validation_check = $this->m_mente->select_where('mente', array("NRP_MENTE" =>$this->session->userdata('1'), 'PASS_MENTE' => $_POST['PASS_MENTE']));
        }
        foreach ($form_name as $key => $value) {
            $content[$value] = $_POST[$value];
        }
        if (empty($validation_check)) redirect(base_url()."user/settings/no");

        $this->universal->update($type, $content, $where);

        /* UPDATE SESSION*/
        $session_data = array();
        if ($type == 'dosen'){
            $dosen_value = $this->m_dosen->select_where('dosen', array("NIP_DOSEN" =>$this->session->userdata('1')));
            
            $session_data = array(
                'akses'=>"dosen",
                '1'=>$dosen_value[0]['NIP_DOSEN'],
                '2'=>$dosen_value[0]['NAMA_DEPAN_DOSEN']." ".$dosen_value[0]['NAMA_BELAKANG_DOSEN'],
                '3'=>$dosen_value[0]['TELEPON_DOSEN'],
                '4'=>$dosen_value[0]['STATUS_DOSEN'],
                );
        }
        else if ($type == 'kj'){
            $kj_value = $this->m_kj->select_where('kj', array("NRP_KJ" =>$this->session->userdata('1')));
            $session_data = array(
                    'akses'=>"kj",
                    '1'=>$kj_value[0]['NRP_KJ'],
                    '2'=>$kj_value[0]['NAMA_DEPAN_KJ']." ".$kj_value[0]['NAMA_BELAKANG_KJ'],
                    '3'=>$kj_value[0]['TELEPON_KJ'],
                    '4'=>$kj_value[0]['JK_KJ'],
                    '5'=>$kj_value[0]['STATUS_KJ'],
                );
        }
        else if ($type == 'mentor'){
            $mentor_value = $this->m_mentor->select_where('mentor', array("NRP_MENTOR" =>$this->session->userdata('1')));
            $session_data = array(
                    'akses'=>"mentor",
                    '1'=>$mentor_value[0]['NRP_MENTOR'],
                    '2'=>$mentor_value[0]['NAMA_DEPAN_MENTOR']." ".$mentor_value[0]['NAMA_BELAKANG_MENTOR'],
                    '3'=>$mentor_value[0]['jk_mentor'],
                    '4'=>$mentor_value[0]['TELEPON_MENTOR'],
                    '5'=>$mentor_value[0]['STATUS_MENTOR'],
                    '6'=>$mentor_value[0]['NRP_KJ'],
                );
        }
        else if ($type == 'mente'){
            $mente_value = $this->m_mente->select_where('mente', array("NRP_MENTE" =>$this->session->userdata('1')));
            $session_data = array(
                    'akses'=>"mente",
                    'id'=>$mente_value[0]['NRP_MENTE'],
                    'nama_depan'=>$mente_value[0]['NAMA_DEPAN_MENTE'],
                    'nama_belakang'=>$mente_value[0]['NAMA_BELAKANG_MENTE'],
                    'NRP_MENTOR'=>$mente_value[0]['NRP_MENTOR'],
                    'NIP_DOSEN'=>$mente_value[0]['NIP_DOSEN'],
                    'JK_MENTE'=>$mente_value[0]['JK_MENTE'],
                    'TELEPON_MENTE'=>$mente_value[0]['TELEPON_MENTE'],
                    'NILAI_MENTE'=>$mente_value[0]['NILAI_MENTE'],
                    'STATUS_MENTE'=>$mente_value[0]['STATUS_MENTE'],
                );
        }
        $this->session->set_userdata($session_data);
        print_r($this->session->userdata['2']);
        redirect(base_url()."dashboard");
    }
}