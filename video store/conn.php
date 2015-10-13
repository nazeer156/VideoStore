<?php

$con = mysqli_connect("sql2.njit.edu","nm359","gibbet92","nm359");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>