<?php
require('conn.php');
$result = mysqli_query($con, "Select count(StoreId) from store 
                               
                              
							  "	
							  );
							  $result1 = mysqli_query($con, "Select count(TransacId),copy.StoreId  from involves
                                                             Natural Join copy where involves.ObjectId = copy.ObjectId
				                                             group by copy.StoreId
							                                   "	
							                                  );
							  
	                      $row1 = mysqli_fetch_array($result);
						  $totalstore = $row1['count(StoreId)'];
echo "<table border='1'>
							  <tr>


<th>no of storeid</th>

<th>no of trans to store id</th>
<th>avg no of transactions per store</th>

</tr>";
while($row2 = mysqli_fetch_array($result1)) {
  echo "<tr>";
 
  echo "<td>" . $row2['StoreId'] . "</td>";
  echo "<td>" . $row2['count(TransacId)']. "</td>";
$avg =   $row2['count(TransacId)'] / $totalstore;
 echo "<td>" . $avg. "</td>";
  
 
  

  echo "</tr>";
}
echo "</table>";
?>