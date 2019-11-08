<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
 <head> 
   <meta charset="utf-8"> 
   <title>Data CSV Export</title>
 </head>
 <body>
   <!-- Export Data --> 
   <a href='<?= base_url() ?>hello/exportCSV'>Export</a><br><br>

   <!-- User Records --> 
   <table border='1' style='border-collapse: collapse;'> 
     <thead> 
      <tr> 
       <th>item_id</th> 
       <th>servername/th> 
       <th>catagory</th> 
       <th>serversize</th>
       <th>uptime</th>	 
      </tr> 
     </thead> 
     <tbody> 
     <?php
     foreach($mydata as $key=>$val){ 
       echo "<tr>"; 
       echo "<td>".$val['item_id']."</td>"; 
       echo "<td>".$val['servername']."</td>"; 
       echo "<td>".$val['catagory']."</td>"; 
       echo "<td>".$val['serversize']."</td>";
       echo "<td>".$val['uptime']."</td>";	
       echo "</tr>"; 
      } 
      ?> 
     </tbody> 
    </table>
  </body>
</html>
