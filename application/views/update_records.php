<!DOCTYPE html>
<html>
<head>
<title>catalog form</title>
</head>

<body>
 <?php
  $i=1;
  foreach($data as $row)
  {
  ?>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Enter Your servername </td>
    <td width="329"><input type="text" name="servername" value="<?php echo $row->servername; ?>"/></td>
  </tr>
  <tr>
    <td>Enter catagory </td>
    <td><input type="text" name="catagory" value="<?php echo $row->catagory; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your serversize </td>
    <td><input type="text" name="serversize" value="<?php echo $row->serversize; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your uptime </td>
    <td><input type="text" name="uptime" value="<?php echo $row->uptime; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Update Records"/></td>
  </tr>
</table>
	</form>
	<?php } ?>
</body>
</html>
