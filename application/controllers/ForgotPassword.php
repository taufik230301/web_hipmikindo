<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPassword extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
	}

    public function index()
    {
        $this->load->view('forgot');
    }

    public function request()
	{
        $data['token']='hajhsaljshaljsh';
		$this->load->view('request', $data);
    }

    public function change_password($token)
	{
        $data['user'] = $this->m_user->read_user_by_token($token)->row_array();

        $this->load->view('setting_password', $data);
       
    }

    public function proses()
    {
        $email = $this->input->post("email");

        $user = $this->m_user->cek_email($email);
        
        if ($user->num_rows()>0){
            $user = $user->row_array();

            

            $token = md5($user['id'].$user['username'].$user['password'].rand(1, 9999));
          
            

            $hasil = $this->m_user->update_token_user($token, $user['id']);

          
		
				if($hasil==false){

                    $this->session->set_flashdata('eror_input','eror_input');
                    redirect('ForgotPassword/index');
				
				}else{

                        $data['token']=$token;

                        $body = $this->load->view('request.php',$data,TRUE);

                        $this->load->library('email');
                        $this->load->config('email');
                
                            
                        $from = $this->config->item('smtp_user');
                        
                        $subject = 'Request Ubah Password';
                        
                        
                        
                
                        $this->email->set_newline("\r\n");
                        $this->email->from($from);
                        $this->email->to($email);
                        $this->email->subject($subject);
                        
                        $this->email->message($body);

                        
                
                        if ($this->email->send()) {

                            $this->session->set_flashdata('success_send','success_send');
                            redirect('Login/index');

                        }else{

                            $this->session->set_flashdata('error_send','error_send');
                            redirect('ForgotPassword/index');

                        }
		        }
				
        }else{

            $this->session->set_flashdata('error_send_no_email','error_send_no_email');
            redirect('ForgotPassword/index');

        }
    }

    public function setting_account($id, $token)
    {
        $password = $this->input->post('password');
        $re_password = $this->input->post('re_password');
       

        if($password == $re_password)
        {
            $hasil = $this->m_user->edit_user($id, $password);

            if($hasil==false){
                $this->session->set_flashdata('eror_edit','eror_edit');
                redirect('ForgotPassword/change_password/'.$token);
			}else{
				$this->session->set_flashdata('edit','edit');
				redirect('Login/index');
            }

        }else{
            $this->session->set_flashdata('password_err','password_err');
			redirect('ForgotPassword/change_password/'.$token);
        }
    }
    
}