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
	$query=$this->db->query("select * from catalog_new");
	return $query->result();
	}

	function deleterecords($id)
	{
	$this->db->query("delete  from catalog_new where item_id='".$id."'");
	}
}
?>
