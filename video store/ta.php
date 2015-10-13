<?php
include('conn.php');
// status of the member
$memberid = $_POST['memberid'];

$result = mysqli_query($con, "Select SUM(Amount) AS ac from                             
                              transaction                   						
                              where transaction.MemberId = '$memberid'");
		

echo "<table border='1'>
<tr>

<th>Amount</th>

</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  
  echo "<td>" . $row['ac'] . "</td>";
  echo "</tr>";
}

echo "</table>";
?>