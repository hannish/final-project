<?php
class Hello_Model extends CI_Model 
{
	function saverecords($servername,$catagory,$serversize,$uptime)
	{
	$query="insert into catalog_new_v1 values('','$ervername','$catagory','$serversize','$uptime')";
	$this->db->query($query);
	}
	
	function displayrecords()
	{
	$query=$this->db->query("select * from catalog_new_v1");
	return $query->result();
	}

	function deleterecords($id)
	{
	$this->db->query("delete  from catalog_new_v1 where item_id='".$id."'");
	}
	
	function displayrecordsById($id)
	{
	$query=$this->db->query("select * from catalog_new_v1 where item_id='".$id."'");
	return $query->result();
	}

	function updaterecords($servername,$catagory,$serversize,$uptime,$id)
	{
	$query=$this->db->query("update catalog_new_v1 SET servername='$servername',catagory='$catagory',serversize='$serversize',uptime=$uptime where item_id='".$id."'");
	}
}
?>
