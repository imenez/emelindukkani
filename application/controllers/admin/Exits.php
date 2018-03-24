<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exits extends CI_Controller {


	 public function __construct()
        {
                parent::__construct();
				$this->load->helper(array('form', 'url'));
        }


	public function index()
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_content');
		$this->load->view('admin/_footer');

	

	}
}