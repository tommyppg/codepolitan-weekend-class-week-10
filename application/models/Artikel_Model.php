<?php

class Artikel_Model extends CI_Model{
	//define nama tabel
	private $table = 'artikel';
	
	function get_all(){
		return $this->db->get($this->table);
	}
	
	function insert($data){
		$this->db->insert($this->table, $data);
		
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}