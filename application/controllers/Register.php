<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

	public function index()
	{
		$this->load->view('register');
    }

    public function proses()
    {
        $username = $this->input->post("username");
        $email = $this->input->post("email");
        $no_telp = $this->input->post("no_telp");
        $password = $this->input->post("password");
        $re_pass = $this->input->post("re_pass");
        $id_user_level = 2;
        $id_status_verifikasi = 1;
        $id = md5($username.$no_telp.$password);

        if($password == $re_pass)
        {
            
            $hasil = $this->m_user->pendaftaran_user($id, $username, $email, $no_telp, $password, $id_user_level, $id_status_verifikasi);

            if($hasil==false){
                $this->session->set_flashdata('eror','eror');
                redirect('register/index');
			}else{
				$this->session->set_flashdata('input','input');
				redirect('login/index');
            }
            
        }else{
            $this->session->set_flashdata('password_err','password_err');
			redirect('register/index');
        }


    }
    
}
