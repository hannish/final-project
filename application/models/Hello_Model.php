<?php
class Hello_Model extends CI_Model 
{
	function saverecords($servername,$catagory,$serversize,$uptime)
	{
	$query="insert into users values('','$ervername','$catagory','$serversize','$uptime')";
	$this->db->query($query);
	}
	
	function displayrecords()
	{
	$query=$this->db->query("select * from catalog");
	return $query->result();
	}
}
