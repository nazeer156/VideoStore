<?php
require('conn.php');
$result = mysqli_query($con, "Select MName, MemberId from member 
                              Natural join transaction
                              Order BY Amount desc
							 
							  ");
echo "<table border='1'>
							  <tr>

<th>100 best</th>
<th>MemberId</th>


</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  
  echo "<td>" . $row['MName'] . "</td>"; 
  echo "<td>" . $row['MemberId'] . "</td>"; 
 
  

  echo "</tr>";
}
echo "</table>";
?>