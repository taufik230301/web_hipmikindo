<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_Public extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		$data['data_user'] = $this->m_user->get_user_umkm_verified()->result_array();
		$this->load->view('public_page', $data);
	}
}
