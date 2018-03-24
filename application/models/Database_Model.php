<?php
class Database_Model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	public function insert_data($table,$data){
		
		$this->db->insert($table, $data);
		return true;
	
	}
	public function update_data($table,$data,$Id){
		
		$this->db->where("Id", $Id);
		$this->db->update($table, $data);
		return true;
	
	}
}