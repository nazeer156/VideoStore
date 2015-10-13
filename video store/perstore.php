<?php
require('conn.php');
$result = mysqli_query($con, "Select COUNT(StoreId), StoreId from copy 
                              Natural join involves,transaction
							  where transaction.TransacId = involves.TransacId && involves.Objectid = copy.ObjectId && involves.CopyNo = copy.CopyNo
                              GROUP BY StoreId"							  );
echo "<table border='1'>
<tr>

<th>StoreId</th>
<th>COUNT</th>


</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  
  echo "<td>" . $row['StoreId'] . "</td>"; 
  echo "<td>" . $row['COUNT(StoreId)'] . "</td>"; 
 
  

  echo "</tr>";
}
echo "</table>";
?>
