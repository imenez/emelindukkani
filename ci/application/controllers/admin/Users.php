<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	 public function __construct()
        {
                parent::__construct();
				$this->load->helper(array('form', 'url'));
				$this->load->database();
				$this->load->model('Database_Model');
				$this->load->library('session');
				if(! $this->session->userdata('session_data'))
				{
					redirect(base_url().'admin/login');
				}

        }


	public function index()
	{
		$query=$this->db->get("users");
		$data["veri"]=$query->result();
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/users',$data);
		$this->load->view('admin/_footer');

	

	}
	public function add(){
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/add_users');
		$this->load->view('admin/_footer');

		
			
	}
	public function addsave(){
		
		$data=array(
		'fname' => $this->input->post('firstname'),
		'sname' => $this->input->post('surname'),
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password'),
		'email' => $this->input->post('email'),
		'department' => $this->input->post('department'),
		'status' => $this->input->post('status')
		);
		
		$this->Database_Model->insert_data("users",$data);
		$this->session->set_flashdata("result","Well Done, User added succesfully!");
		redirect(base_url()."/admin/users");
	}
	function delete($Id){
		
		$this->db->query("DELETE FROM users WHERE Id=$Id");
		$this->session->set_flashdata("result","Well Done, User deleted succesfully!.$this->input->post('pass',TRUE);");
		redirect(base_url()."/admin/users");


		
			
	}
	function edit($Id){
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		
		$request = $this->db->query("SELECT * FROM users WHERE Id=$Id");
		$data["info"]=$request->result();
		$this->load->view('admin/edit_users',$data);
		
		
		$this->load->view('admin/_footer');


		
			
	}
	public function updatesave($Id){
		
		$data=array(
		'fname' => $this->input->post('firstname'),
		'sname' => $this->input->post('surname'),
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password'),
		'email' => $this->input->post('email'),
		'department' => $this->input->post('department'),
		'status' => $this->input->post('status')
		);
		
		$this->Database_Model->update_data("users",$data,$Id);
		$this->session->set_flashdata("result","Well Done, User updated succesfully!");
		redirect(base_url()."/admin/users");
	}
	function view($Id){
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		
		$request = $this->db->query("SELECT * FROM users WHERE Id=$Id");
		$data["info"]=$request->result();
		$this->load->view('admin/view_user',$data);
		
		$this->load->view('admin/_footer');
		

		
			
	}
}