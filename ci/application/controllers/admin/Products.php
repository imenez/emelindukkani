<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {


	 public function __construct()
        {
                parent::__construct();
				$this->load->library('session');
				$this->load->database();
				$this->load->model('Database_Model');
				$this->load->helper(array('form', 'url'));
				
				if(! $this->session->userdata('session_data'))
				{
					redirect(base_url().'admin/login');
				}

        }


	public function index()
	{
		$query=$this->db->get("products");
		$data["data"]=$query->result();
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/products',$data);
		$this->load->view('admin/_footer');

	

	}
	public function add(){
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/add_products');
		$this->load->view('admin/_footer');

		
			
	}
	public function addsave(){
		
		$data=array(
		'name' => $this->input->post('name'),
		'weight' => $this->input->post('weight'),
		'price' => $this->input->post('price'),
		'status' => $this->input->post('status'),
		'species' => $this->input->post('species'),
		'origin' => $this->input->post('origin'),
		'comment' => $this->input->post('comment'),
		'piece' => $this->input->post('piece'),
		'picture' => $this->input->post('picture')
		
		);
		
		$this->Database_Model->insert_data("products",$data);
		$this->session->set_flashdata("result","Well Done, Product added succesfully!");
		redirect(base_url()."/admin/products");
	}
	function delete($Id){
		
		$this->db->query("DELETE FROM products WHERE Id=$Id");
		$this->session->set_flashdata("result","Well Done, Products deleted succesfully!");
		redirect(base_url()."/admin/products");


		
			
	}
	function edit($Id){
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		
		$request = $this->db->query("SELECT * FROM products WHERE Id=$Id");
		$data["info"]=$request->result();
		$this->load->view('admin/edit_products',$data);
		
		
		$this->load->view('admin/_footer');


		
			
	}
	public function updatesave($Id){
		
		$data=array(
		'name' => $this->input->post('name'),
		'weight' => $this->input->post('weight'),
		'price' => $this->input->post('price'),
		'status' => $this->input->post('status'),
		'species' => $this->input->post('species'),
		'origin' => $this->input->post('origin'),
		'comment' => $this->input->post('comment'),
		'piece' => $this->input->post('piece'),
		'picture' => $this->input->post('picture')
		
		);
		
		$this->Database_Model->update_data("products",$data,$Id);
		$this->session->set_flashdata("result","Well Done, Product updated succesfully!");
		redirect(base_url()."/admin/products");
	}
	function view($Id){
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		
		$request = $this->db->query("SELECT * FROM products WHERE Id=$Id");
		$data["info"]=$request->result();
		$this->load->view('admin/view_products',$data);
		
		$this->load->view('admin/_footer');
			
	}
	function add_picture($Id){
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		
		
		$request = $this->db->query("SELECT * FROM products WHERE Id=$Id");
		$data["info"]=$request->result(); 
		$this->load->view('admin/add_product_picture',$data);
		
		$this->load->view('admin/_footer');
			
	}
	function upload_picture($Id){
		
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = 2000;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
						$this->session->set_flashdata("result","Upload error!.$error");
                        redirect(base_url().'admin/products/add_picture/$id');
                }
                else
                {
					$data=array(
				'picture' => $this->upload->data('file_name')
				);
		
						$this->Database_Model->update_data("products",$data,$Id);
						$this->session->set_flashdata("result","Well Done, Picture uploaded succesfully!");
                        redirect(base_url().'admin/products');
    }			}
	
}