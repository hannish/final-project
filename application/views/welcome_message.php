<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Catalog Service</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.theme.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
</head>
<body>
<div id="header">
	
</div>
<div class="container">
	<div class="row">
		<p>Please fill the following form to enter server details</p>
	</div>
	<div class="row">
	<form action="/welcome/book" method="POST">
	  <div class="form-group">
		<label for="exampleInputName">servername</label>
		<input type="text" name="servername" class="form-control" id="exampleInputName" placeholder="Enter Server Name">
	  </div>
	  <div class="form-group">
                <label for="catagory">category of the server</label>
                <select class="form-control" name="catagory" id="catagory">
                  <option>Application</option>
                  <option>Database</option>
                  <option>Firewall</option>
                  <option>Middleware</option>
                </select>
          </div>
	  <div class="form-group">
                <label for="serversize">size of the server</label>
                <select class="form-control" name="serversize" id="server size">
                  <option>m1large</option>
                  <option>m1xlarge</option>
                  <option>t1medium</option>
                  <option>t1small</option>
                </select>
          </div>
	  <div class="form-group">
	  	<label for="uptime">uptime date</label>
	  	<input type="text" id="datepicker" name="uptime">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	</div>
</div>

</body>
</html>
