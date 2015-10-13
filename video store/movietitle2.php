<?php
include('conn.php');
// status of the member
$memberid = $_POST['memberid'];

$result = mysqli_query($con, "Select DISTINCT movie.Title AS ac from movie
                              Natural join involves 
                              Natural join transaction 
                              Natural join member							  
                              where member.MemberId = '$memberid' && transaction.Type= 'res' ");
		

echo "<table border='1'>
<tr>

<th>Movietitle</th>

</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  
  echo "<td>" . $row['ac'] . "</td>";
  echo "</tr>";
}

echo "</table>";
?>