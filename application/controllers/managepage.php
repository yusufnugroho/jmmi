<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManagePage extends CI_Controller {
	public function profil(){

        // SESSION CHECK
        $session = array();
        $session[] = $this->session->userdata('akses');
        if (!empty($session) && $session[0] == "") redirect('welcome/logout');

        // RETRIEVE DATA FROM DATABASE
        $this->load->model("m_content");
        $data['logo_profil'] = $this->m_content->select_where('lib_contents', array(
        	'id_pages' => 1,
        	'id_type' => 1,
        	));
        $data['list_profil'] = $this->m_content->select_where('lib_contents', array(
        	'id_pages' => 1,
        	'id_type' => 2,
        	));
        $data['moto_profil'] = $this->m_content->select_where('lib_contents', array(
        	'id_pages' => 1,
        	'id_type' => 4,
        	));

        // INIT DATA TO SEND
        $data['session'] =  $session[0];
        $data['foto'] = base_url().$data['logo_profil'][0]['content_content'];;

        // CALL VIEW
        $this->load->view("dashboard/header");
        $this->load->view('dashboard/navbar', $data);
        $this->load->view("managepage/profil",$data);
        $this->load->view('dashboard/footer');
	}
	public function faq(){

	}
	public function kontak(){

	}
	public function footer(){

	}

        public function ubah_foto(){
                $target_Path = NULL;
                // GET FILE PATH
                if ($_FILES['userFile']['name'] != NULL)
                {
                    $target_Path = "File/";
                    $string = basename( $_FILES['userFile']['name'] );
                    $string = str_replace(" ","-", $string);
                    $target_Path = $target_Path.$string;
                }

                // UPDATE PHOTO IN DATABASE
                $this->load->model('m_content');
                if ($target_Path != NULL) {
                    if (move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path )){
                        $this->m_content->update_db('lib_contents', array('content_content' => $target_Path), array('id_content'=>$this->input->post('id_foto')));
                    }
                }

                // REDIRECT TO PREVIOUS LINK
                redirect($this->input->post('return_link'));
        }
        public function tambah_list(){
                if ($this->input->post('managing') == 'profil'){

                        // INSERT LIST INTO DATABASE
                        $this->load->model('m_content');
                        $this->m_content->insert('lib_contents', array(
                                'label_content' => $this->input->post('list_add_label'),
                                'content_content' => $this->input->post('list_add_content'),
                                'id_pages' => 1,
                                'id_type' => 2,
                                ));

                        // REDIRECT TO PREVIOUS LINK
                        redirect($this->input->post('return_link'));
                }
        }

        public function hapus_list(){

        }

        public function ubah_location(){

        }

        public function ubah_bottom(){

        }

}