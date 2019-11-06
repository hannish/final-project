<?php 
class Catalog extends CI_Model {
	function save($data){
		$this->db->insert('catalog',$data);
	}
}
