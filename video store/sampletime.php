<?php
require('conn.php');
$result = mysqli_query($con, "Select DateTime as nod, MemberId from transaction
                              ");
$row1 = mysqli_fetch_array($result);
$dat = $row1['nod'];
$res= date('Y/m/d') -  $dat;
echo $dat;
echo "<table border='1'>
<tr>

<th>no of days Id</th>
<th>MemberId</th>


</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
   echo "<td>" . $res . "</td>";  
  echo "<td>" . $row['MemberId'] . "</td>"; 
 
  

  echo "</tr>";
}
echo "</table>";

?>