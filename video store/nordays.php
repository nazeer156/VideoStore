<?php
require('conn.php');
$result = mysqli_query($con, "Select Distinct DailyCharge,Amount,MemberId,TransacId, store_object.ObjectId from store_object, 
                              transaction 
							  Natural join involves
							  where transaction.TransacId = involves.TransacId ");
echo "<table border='1'>
<tr>
<th>no of rental days per member</th>
<th>Transaction Id</th>
<th>ObjectId</th>
<th>MemberId</th>


</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  $nordays = $row['Amount'] / $row['DailyCharge'];
  echo "<td>" . $nordays. "</td>"; 
  echo "<td>" . $row['TransacId'] . "</td>";
echo "<td>" . $row['ObjectId'] . "</td>";   
  echo "<td>" . $row['MemberId'] . "</td>"; 
 
  

  echo "</tr>";
}
echo "</table>";
?>