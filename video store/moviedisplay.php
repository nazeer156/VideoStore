<?php
require('conn.php');
$result = mysqli_query($con, "Select * from                             
                              movie" );
							  echo "<table border='1'>
<tr>

<th>Objectid</th>
<th>Title</th>
<th>CAtegory</th>
<th>Director</th>
<th>Producer</th>
<th>Actor1</th>
<th>Actor2</th>
<th>Daily Charge</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  
  echo "<td>" . $row['ObjectId'] . "</td>";
  echo "<td>" . $row['Title'] . "</td>";
  echo "<td>" . $row['Category'] . "</td>";
  echo "<td>" . $row['Director'] . "</td>";
  echo "<td>" . $row['Producer'] . "</td>";
  echo "<td>" . $row['Actor1'] . "</td>";
  echo "<td>" . $row['Actor2'] . "</td>";
  echo "<td>" . $row['Charge'] . "</td>";

  echo "</tr>";
}
echo "</table>";
?>