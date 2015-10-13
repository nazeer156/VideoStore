<?php
require('conn.php');
$year= Date("Y");
$lastyear=$year - 1;
$result = mysqli_query($con, "Select count(Title) ,Year(DateTime), Title
                              from movie,transaction 
                              Natural join involves
							  where transaction.TransacId = involves.TransacId && involves.ObjectId = movie.ObjectId  && Year(DateTime)= '$lastyear'
							  Group by Title
                              Order BY count(Title) desc ");
							   
							   
							   
echo "<table border='1'>
<tr>

<th>movietitle</th>
<th>no of tiles reserved</th>
<th>Year</th>
</tr>";

while($row1 = mysqli_fetch_array($result)) {
  echo "<tr>"; 
   
   echo "<td>" . $row1['Title'] . "</td>"; 
   echo "<td>" . $row1['count(Title)'] . "</td>"; 
  echo "<td>" . $row1['Year(DateTime)'] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>