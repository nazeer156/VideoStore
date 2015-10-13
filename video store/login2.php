<?php
// checkLogin.php

session_start(); // Start a new session
$con = mysqli_connect("127.0.0.1","root","","video store");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Get the data passed from the form
$name = $_POST['name'];
$phone = $_POST['phone'];
// Do some basic sanitizing

$name = stripslashes($name);
$phone = stripslashes($phone);

$sql = "select * from full_time where Name = '$name' and Phone = '$phone' ";



$result = mysqli_query($con, $sql) or die ( mysql_error() );

$count = 0;

while ($line = mysqli_fetch_assoc($result)) 
	 $count++;


if ($count == 1) {
	 $_SESSION['loggedIn'] = "true";
	 header("Location: employee.php"); // This is wherever you want to redirect the user to
} else {
	 $_SESSION['loggedIn'] = "false";
	 header("Location: employeemain.php"); // Wherever you want the user to go when they fail the login
}

?>
