<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tsp extends CI_Controller {


	 public function __construct()
        {
                parent::__construct();
				$this->load->helper(array('form', 'url'));
				$this->load->library('session');
				if(! $this->session->userdata('session_data'))
				{
					redirect(base_url().'admin/login');
				}

        }


	public function index()
	{
		
		
		$this->load->view('admin/tsp');
		
	

	}
}