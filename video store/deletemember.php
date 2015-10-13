<?php
include('conn.php');
$memberid = $_POST['memberid'];
$mname = $_POST['mname'];
$sql= "DELETE FROM member
       where MemberId='$memberid' and MName = '$mname'";
	   if (!mysqli_query($con, $sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record deleted";


?>