<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//echo "indexxxxxx";
		$session_check = $this->session->userdata('akses');
		if (!empty($session_check)){
			if ($session_check == 'dosen'){
				echo "LOGIN BERHASIL : DOSEN";
			}
			elseif ($session_check == 'kj') {
				echo "LOGIN BERHASIL : KJ";
			}
			elseif ($session_check == 'mente') {
				echo "LOGIN BERHASIL : MENTE";
			}
			elseif ($session_check == 'mentor') {
				echo "LOGIN BERHASIL : MENTOR";
			}
			echo "<br><a href='".base_url()."index.php/welcome/logout'>LOGOUT</a>";
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
		$id = $this->input->post('id');
		$password = $this->input->post('password');
		$this->load->model("m_dosen");
		$login_dosen = array(
			'NIP_DOSEN' => $id, 
			'PASSWORD_DOSEN'=> $password,
			);
		$result_dosen = $this->m_dosen->select_where('dosen', $login_dosen);

		if (!empty($result_dosen)) {
			$session_data = array(
				'akses'=>"dosen",
				'id'=>$result_dosen[0]['NIP_DOSEN'],
				'nama_depan'=>$result_dosen[0]['NAMA_DEPAN_DOSEN'],
				'nama_belakang'=>$result_dosen[0]['NAMA_BELAKANG_DOSEN'],
				);
			$this->session->set_userdata($session_data);
			$session_id = $this->session->userdata('session_id');
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
					'id'=>$result_kj[0]['NRP_KJ'],
					'nama_depan'=>$result_kj[0]['NAMA_DEPAN_KJ'],
					'nama_belakang'=>$result_kj[0]['NAMA_BELAKANG_KJ'],
					);
				$this->session->set_userdata($session_data);
				$session_id = $this->session->userdata('session_id');
				redirect('welcome');
			}
			else{
				$this->load->model("m_mente");
				$login_mente = array(
					'NRP_MENTE' => $id, 
					'PASS_MENTE'=> $password,
				);
				$result_mente = $this->m_mente->select_where('mente', $login_mente);
				if (!empty($result_mente)){
					$session_data = array(
					'akses'=>"mente",
					'id'=>$result_kj[0]['NRP_MENTE'],
					'nama_depan'=>$result_kj[0]['NAMA_DEPAN_MENTE'],
					'nama_belakang'=>$result_kj[0]['NAMA_BELAKANG_MENTE'],
					);
				$this->session->set_userdata($session_data);
				$session_id = $this->session->userdata('session_id');
				redirect('welcome');
				}
				else{
					$this->load->model("m_mentor");
					$login_mentor = array(
						'NRP_MENTOR' => $id, 
						'PASSWORD_MENTOR'=> $password,
					);
					$result_mentor = $this->m_mentor->select_where('mentor', $login_mentor);
					if (!empty($result_mentor)){
						$session_data = array(
							'akses'=>"kj",
							'id'=>$result_kj[0]['NRP_MENTOR'],
							'nama_depan'=>$result_kj[0]['NAMA_DEPAN_MENTOR'],
							'nama_belakang'=>$result_kj[0]['NAMA_BELAKANG_MENTOR'],
							);
						$this->session->set_userdata($session_data);
						$session_id = $this->session->userdata('session_id');
						redirect('welcome');
					}
					else{
						redirect('welcome');
					}
				}

			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('keterangan', 'telah logout');
		//echo $this->session->flashdata('keterangan');
		//echo $flash;
		redirect('welcome');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */