<?php
require('conn.php');
$result = mysqli_query($con, "Select COUNT(TransacId),Month(DateTime),Year(DateTime), Min(DateTime)
                              from transaction
							  Group by Month(DateTime)  ");
							  $result1 = mysqli_query($con, "Select Max(DateTime), Min(DateTime)
                              from transaction");
							   $result2 = mysqli_query($con,  "Select COUNT(TransacId) from transaction ");
							   $row1=mysqli_fetch_array($result1);
							   $min =$row1['Min(DateTime)'];
							   $max =Date('Y,m,d');
							   $diff = abs(strtotime($max) - strtotime($min));
							   
							   $years = floor($diff / (365*60*60*24));
                               $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                               $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                               
							   
							   $row2=mysqli_fetch_array($result2);
							   $sum = array($row2['COUNT(TransacId)']);
							   $sumoftransactions = array_sum($sum);
							   
							   
							   $average = $sumoftransactions / $months;
							   echo 'Average no of transactions per month is ',  $average;
							   
							     
							   
echo "<table border='1'>
<tr>
<th>no of transactions</th>
<th>Month</th>
<th>Year</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>"; 
  echo "<td>" . $row['COUNT(TransacId)'] . "</td>"; 
  echo "<td>" . $row['Month(DateTime)'] . "</td>"; 
  echo "<td>" . $row['Year(DateTime)'] . "</td>";
  
  echo "</tr>";
}
echo "</table>";
?>