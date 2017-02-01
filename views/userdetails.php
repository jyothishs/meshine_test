<?php
include ('../config/databases.php');

   $result=mysqli_query($con,"select * from employe_tb");
  
  while($row=mysqli_fetch_row($result))
  {
echo "<table border=1px;>";

   echo "<tr><td>$row[0]</td>" ;
   echo "<td>$row[6]</td>";
   echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
     echo "<td>$row[3]</td>";
     echo "<td>edit</td></tr>";
}
?>