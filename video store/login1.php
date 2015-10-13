<?php
// checkLogin.php

session_start(); // Start a new session
$con = mysqli_connect("sql2.njit.edu","nm359","gibbet92","nm359");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Get the data passed from the form
$username = $_POST['username'];
$password = $_POST['password'];
// Do some basic sanitizing

$username = stripslashes($username);
$password = stripslashes($password);

$sql = "select * from users where Username = '$username' and Password = '$password' ";



$result = mysqli_query($con, $sql) or die ( mysql_error() );

$count = 0;

while ($line = mysqli_fetch_assoc($result)) 
	 $count++;


if ($count == 1) {
	 $_SESSION['loggedIn'] = "true";
	 header("Location: admin1.php"); // This is wherever you want to redirect the user to
} else {
	 $_SESSION['loggedIn'] = "false";
	 header("Location: insertuser.php"); // Wherever you want the user to go when they fail the login
}

?>
