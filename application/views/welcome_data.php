<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CatalogService</title>
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
		<p>Thank you for using our services. We've entered the followig server details</p>
	</div>
	<div class="row">
		<table class="table">
			<tr>
				<td><em>server name</em></td>
				<td><?php echo $servername ?></td>
			</tr>
			<tr>
				<td><em>catagory</em></td>
				<td><?php echo $catagory ?></td>
			</tr>
			<tr>
                                <td><em>size of server</em></td>
                                <td><?php echo $serversize ?></td>
                        </tr>
			<tr>
				<td><em>uptime date</em></td>
				<td><?php echo $uptime ?></td>
			</tr>
		</table>
	</div>
	<div class="row">
		<button type="button" id="back" class="btn btn-primary">Make new entry</button>
	</div>
</div>

</body>
</html>
