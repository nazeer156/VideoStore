<?php
// memberlogin.php

session_start(); // Start a new session
$con = mysqli_connect("sql2.njit.edu","nm359","gibbet92","nm359");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Get the data passed from the form
$memberid = $_POST['memberid'];
$mname = $_POST['mname'];
// Do some basic sanitizing

$memberid = stripslashes($memberid);
$mname = stripslashes($mname);

$sql = "select * from member where MemberId = '$memberid' and MName = '$mname' ";



$result = mysqli_query($con, $sql) or die ( mysql_error() );

$count = 0;

while ($line = mysqli_fetch_assoc($result)) 
	 $count++;


if ($count == 1) {
	 $_SESSION['loggedIn'] = "true";
	 header("Location: member.php"); // This is wherever you want to redirect the user to
} else {
	 $_SESSION['loggedIn'] = "false";
	 header("Location: membermain.php");	 // Wherever you want the user to go when they fail the login
echo "Enter correct details!!";
	 }

?>




</html>