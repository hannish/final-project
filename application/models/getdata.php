<?php 
class getdata extends CI_Model {
	function getposts(){
		$this->db->select("servername,catagory,serversize,uptime"); 
  		$this->db->from('catalog');
  		$query = $this->db->get();
  		return $query->result();
	}
}
