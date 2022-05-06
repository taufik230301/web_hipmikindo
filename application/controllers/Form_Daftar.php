<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Daftar extends CI_Controller {

	public function view_user()
	{
		$this->load->view('user/form_daftar');
    }
    
}
