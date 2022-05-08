<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Daftar extends CI_Controller {

	public function view_user()
	{
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$this->load->view('user/form_daftar');
		
	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}
    }
    
}
