

<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
</head>

<BASE REF="http://localhost/home.php">

<title> 

VIDEO STORE 

</title>

<body bgcolor="#6E6E6E"  text="#D8D8D8">

       
       <!--Header-->	

<center><b><h1>YOU HAVE ARRIVED VIDEO STORE WEBPAGE!</h1></b></center>

	


	<!--menu-->
<h3><hr></hr>
		
<center>
                 

			   		
&nbsp&nbsp&nbsp<a href="index.html"><font color="#D8D8D8">HOME</font></a>
  &nbsp&nbsp&nbsp<a href="adminlogin.php"><font color="#D8D8D8">ADMIN</font></a>
  &nbsp&nbsp&nbsp<a href="memberlogin.php"><font color="#D8D8D8">MEMBER</font></a>
  &nbsp&nbsp&nbsp<a href=""><font color="#D8D8D8">CONTACT US</font></a> 	
  	&nbsp&nbsp&nbsp<a href="moviedisplay.php"><font color="#D8D8D8">view movies</font></a> 
</center>
			
<hr></hr></h3>


<?php

$con=mysqli_connect("127.0.0.1","root","","video store");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$employeeid = mysqli_real_escape_string($con, $_POST['employeeid']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$salary = mysqli_real_escape_string($con, $_POST['salary']);
$mtype = mysqli_real_escape_string($con, $_POST['mtype']);
$storeid = mysqli_real_escape_string($con, $_POST['storeid']);

$sql="INSERT INTO full_time (EmployeeId, Name, Address, Phone, Salary, MType, StoreId)
VALUES ('$employeeid', '$name', '$address', '$phone', '$salary', '$mtype', '$storeid')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

?>



</body>
</html>