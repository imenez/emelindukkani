<?php
class Admin_Model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	public function login($email,$password){
		
		
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$this->db->limit(1);
		
		$query = $this->db->get();
		
		if($query->num_rows() == 1){
			
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
}