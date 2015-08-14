<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

        public function __construct() 
        {
			parent::__construct();
	        $this->load->model('m_mentor');
			$this->load->model('m_mente');
			$this->load->model('m_dosen');
			$this->load->model('m_apply');
			$this->load->model('m_kj');
			$this->load->model('m_mentor');
		}
	public function index()
	{
		redirect('pages/beranda');
		$session_check = $this->session->userdata('akses');
		if (!empty($session_check) && $session_check == "") redirect('welcome/logout');
		if (!empty($session_check)){
			if ($session_check == 'dosen'){
				redirect('dashboard');
				echo "LOGIN BERHASIL : DOSEN";
			}
			elseif ($session_check == 'kj') {
				echo "LOGIN BERHASIL : KJ";
				redirect('dashboard');
			}
			elseif ($session_check == 'mente') {
				echo "LOGIN BERHASIL : MENTE";
				redirect('dashboard');
			}
			elseif ($session_check == 'mentor') {
				echo "LOGIN BERHASIL : MENTOR";
				redirect('dashboard');
			}
                        //debug ON apply Mentor
			elseif ($session_check == 'mentorUnregistered') {
				echo "LOGIN BERHASIL : MENTOR";
				redirect('dashboard');
			}
                        
			echo "<br><a href='".base_url()."welcome/logout'>LOGOUT</a>";
			echo $this->session->userdata('id');
		}
		else {
			$this->load->view('login');
		}
	}
	public function req_login()
	{
		$session_check = $this->session->userdata('akses');
		if(empty($session_check)){
			redirect('welcome');
		}
		else return;
	}
	public function login()
	{
                /*

                 * Logic
                 * Check Dosen, Mente, Mentor, KJ, Unregistred Mentor 
                 * Set Session                */
		$id = $this->input->post('id');
		$password = $this->input->post('password');
                
		$this->load->model("m_admin");
		$login_admin = array(
			'ID_ADMIN' => $id, 
			'PASSWORD_ADMIN'=> $password,
			);
		$result_admin = $this->m_admin->select_where('admin', $login_admin);

		if (!empty($result_admin)) 
                {
			$session_data = array(
				'akses'=>"admin",
				'1'=>$result_admin[0]['ID_ADMIN'],
				'2'=>$result_admin[0]['NAMA_DEPAN_ADMIN']." ".$result_admin[0]['NAMA_BELAKANG_ADMIN'],
				'3'=>$result_admin[0]['TELEPON_ADMIN'],
				'4'=>$result_admin[0]['STATUS_ADMIN'],
				);
			$this->session->set_userdata($session_data);
			$session_id = $this->session->userdata('session_id');
			redirect('dashboard');
			redirect('welcome');
		}
		else {
			$this->load->model("m_kj");
			$login_kj = array(
				'NRP_KJ' => $id, 
				'PASSWORD_KJ'=> $password,
			);
			$result_kj = $this->m_kj->select_where('kj', $login_kj);
			if (!empty($result_kj)){
				$session_data = array(
                    'akses'=>"kj",
                    '1'=>$result_kj[0]['NRP_KJ'],
                    '2'=>$result_kj[0]['NAMA_DEPAN_KJ']." ".$result_kj[0]['NAMA_BELAKANG_KJ'],
                    '3'=>$result_kj[0]['TELEPON_KJ'],
                    '4'=>$result_kj[0]['JK_KJ'],
                    '5'=>$result_kj[0]['STATUS_KJ'],
                );
				$this->session->set_userdata($session_data);
				$session_id = $this->session->userdata('session_id');
				redirect('dashboard');
				redirect('welcome');
			}
			else{
				$this->load->model("m_mente");
				$login_mente = array(
					'NRP_MENTE' => $id, 
					'PASS_MENTE'=> $password,
				);
				$result_mente = $this->m_mente->select_where('mente', $login_mente);
				
				if (!empty($result_mente))
                                    {
					$session_data = array(
	                    'akses'=>"mente",
	                    '1'=>$result_mente[0]['NRP_MENTE'],
	                    '2'=>$result_mente[0]['NAMA_DEPAN_MENTE']." ".$result_mente[0]['NAMA_BELAKANG_MENTE'],
	                    '3'=>$result_mente[0]['NRP_MENTOR'],
	                    '4'=>$result_mente[0]['NIP_DOSEN'],
	                    '5'=>$result_mente[0]['JK_MENTE'],
	                    '6'=>$result_mente[0]['TELEPON_MENTE'],
	                    '7'=>$result_mente[0]['NILAI_MENTE'],
	                    '8'=>$result_mente[0]['STATUS_MENTE'],
                    );
				$this->session->set_userdata($session_data);
				$session_id = $this->session->userdata('session_id');
				redirect('dashboard');
				redirect('welcome');
				}
				else{
					$this->load->model("m_mentor");
					$login_mentor = array(
						'NRP_MENTOR' => $id, 
						'PASSWORD_MENTOR'=> $password,
					);
					$result_mentor = $this->m_mentor->select_where('mentor', $login_mentor);
					if (!empty($result_mentor))
                                            {
						$session_data = array(
                            'akses'=>"mentor",
                            '1'=>$result_mentor[0]['NRP_MENTOR'],
                            '2'=>$result_mentor[0]['NAMA_DEPAN_MENTOR']." ".$result_mentor[0]['NAMA_BELAKANG_MENTOR'],
                            '3'=>$result_mentor[0]['jk_mentor'],
                            '4'=>$result_mentor[0]['TELEPON_MENTOR'],
                            '5'=>$result_mentor[0]['STATUS_MENTOR'],
                            '6'=>$result_mentor[0]['NRP_KJ'],
						);
                                                        //print_r($session_data);die();
						$this->session->set_userdata($session_data);
						$session_id = $this->session->userdata('session_id');
						redirect('dashboard');
						redirect('welcome');
					}
					else{
                        $this->load->model("m_apply");
                        $login_unregistered_mentor = array(
                            'nrp'=>$id,
                            'password'=>$password,
                        );
                        $result_unregistered_mentor = $this->m_apply->select_where('apply_mentor',$login_unregistered_mentor);
                        print_r($result_unregistered_mentor);
                        if(!empty($result_unregistered_mentor))
                            {	
                            	$session_data = array();
                            	foreach ($result_mentor as $key => $value) {
                            		$session_data = array(
                                        'akses' => "mentor",
                                        'id' => $value->nrp,
                                        'nama_depan' => $value->nama_depan,
                                        'nama_belakang' => $value->nama_belakang,
		                            );
                            	}
                            $this->session->set_userdata($session_data);
                            $session_id = $this->session->userdata('session_id');
                            redirect('dashboard');
                            redirect('welcome');
                        }
                        else   
                        {
                            //if doesn't match any table
                            //echo "wuhu"; die();
							$this->load->model("m_dosen");
							$login_dosen = array(
								'NIP_DOSEN' => $id, 
								'PASSWORD_DOSEN'=> $password,
								);
							$result_dosen = $this->m_dosen->select_where('dosen', $login_dosen);

							if (!empty($result_dosen)) 
					                {
								$session_data = array(
									'akses'=>"dosen",
									'1'=>$result_dosen[0]['NIP_DOSEN'],
									'2'=>$result_dosen[0]['NAMA_DEPAN_DOSEN']." ".$result_dosen[0]['NAMA_BELAKANG_DOSEN'],
									'3'=>$result_dosen[0]['TELEPON_DOSEN'],
									'4'=>$result_dosen[0]['STATUS_DOSEN'],
									);
								$this->session->set_userdata($session_data);
								$session_id = $this->session->userdata('session_id');
								redirect('dashboard');
								redirect('welcome');
							}
							else
							{
	                            redirect('welcome/logout');
							}
                        }
					}
				}

			}
		}
	}
            public function logout()
            {
                    $this->session->sess_destroy();
                    $this->session->set_flashdata('keterangan', 'telah logout');
                    redirect('welcome');
            }
    }

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
