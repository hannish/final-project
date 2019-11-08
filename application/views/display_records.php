<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>

<body>
   <!-- Export Data --> 
   <a href='<?= base_url() ?>/Hello/ExportCSV'>Export</a>
   <!-- User Records --> 
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>servername</th>
    <th>catagory</th>
    <th>serversize</th>
    <th>uptime</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->servername."</td>";
  echo "<td>".$row->catagory."</td>";
  echo "<td>".$row->serversize."</td>";
  echo "<td>".$row->uptime."</td>";
  echo "<td><a href='deletedata?id=".$row->item_id."'>Delete</a></td>";
  echo "<td><a href='updatedata?id=".$row->item_id."'>Update</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>

</body>
</html>

