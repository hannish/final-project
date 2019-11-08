<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>

<body>
   <!-- Export Data -->
   <a href='<?= base_url() ?>hello/exportCSV'>Export</a><br><br>

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

<table border='1' style='border-collapse: collapse;'>
     <thead>
      <tr>
       <th>Sr No</th>
       <th>servername/th>
       <th>catagory</th>
       <th>serversize</th>
       <th>uptime</th>
      </tr>
     </thead>
     <tbody>
     <?php
     $i=1;	
     foreach($mydata as $key=>$val)
      {
       echo "<tr>";
       echo "<td>".$val['item_id']."</td>";
       echo "<td>".$val['servername']."</td>";
       echo "<td>".$val['catagory']."</td>";
       echo "<td>".$val['serversize']."</td>";
       echo "<td>".$val['uptime']."</td>";
       echo "</tr>";
      $i++;
      }
      ?>
     </tbody>
</table>

</body>
</html>

