<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	 public function __construct()
        {
                parent::__construct();
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				$this->load->library('session');
				$this->load->model("Admin_Model");
				$this->load->database();
				
        }


	public function index()
	{
		$this->load->view('admin/login');

	}
	public function trylogin()
	{
				$email	  = $this->input->post('email',TRUE);
				$password = $this->input->post('password',TRUE);
				
				$result = $this->Admin_Model->login($email,$password);
				
					if($result) 
					{
						
						$sess_array = array(
						'Id'=>$result[0]->Id,
						'email'=>$result[0]->email,
						'fname'=>$result[0]->fname,
						'sname'=>$result[0]->sname

						);
						
						$this->session->set_userdata('session_data',$sess_array);						
						redirect(base_url().'admin/home');
						
					}
					else{
						$this->session->set_flashdata("login_error","Hatalı kullanıcı adı veya parola!");
						$this->load->view('admin/login');
					}
				
	}
	public function logout()
	{
		
						$this->session->unset_userdata('session_data');	
						$this->session->sess_destroy();
						redirect(base_url().'admin/login');
		
		
		
		
	}
}