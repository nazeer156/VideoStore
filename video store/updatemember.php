<?php
$con = mysqli_connect("sql2.njit.edu","nm359","gibbet92","nm359");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$memberid = $_POST['memberid'];
$mname = $_POST['mname'];
$address = $_POST['address'];
$sql= "update member
       set MemberId='$memberid', MName = '$mname', Address = '$address'
       where MemberId='$memberid'";
	   if (!mysqli_query($con, $sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

$result = mysqli_query($con,"SELECT * FROM member where MemberId='$memberid' ");

echo "<table border='1'>
<tr>
<th>MemberId</th>
<th>MName</th>
<th>Address</th>

</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['MemberId'] . "</td>";
  echo "<td>" . $row['MName'] . "</td>";
  echo "<td>" . $row['Address'] . "</td>";
 
  echo "</tr>";
}

echo "</table>";
?>	   
