<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>

<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>servername</th>
    <th>catagory</th>
    <th>serversize</th>
    <th>uptime</th>
  </tr>
  <?php
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->servername."</td>";
  echo "<td>".$row->catagory."</td>";
  echo "<td>".$row->serversize."</td>";
  echo "<td>".$row->uptime."</td>";
  echo "</tr>";
  }
   ?>
</table>

</body>
</html>

