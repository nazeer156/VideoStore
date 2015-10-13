

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
  &nbsp&nbsp&nbsp<a href="membermain.php"><font color="#D8D8D8">MEMBER</font></a>
  &nbsp&nbsp&nbsp<a href=""><font color="#D8D8D8">CONTACT US</font></a> 	
  	
</center>
			
<hr></hr></h3>


<?php

$con=mysqli_connect("127.0.0.1","root","","video store");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$memberid = '';
$mname = mysqli_real_escape_string($con, $_POST['mname']);
$address = mysqli_real_escape_string($con, $_POST['address']);


$sql="INSERT INTO member (MemberId, MName, Address)
VALUES ('$memberid', '$mname', '$address')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";
echo "<br>";

echo "KEEP TRACK OF YOUR MEMBER ID TO LOGIN In FUTURE <br>";

$result = mysqli_query($con,"SELECT * FROM member where MName = '$mname'");

while($row = mysqli_fetch_array($result)) {
echo "MEMBERID   MEMBERNAME     ADDRESS <br>" ;
  echo $row['MemberId'] . "    " . $row['MName'] . " " . $row['Address'];
  echo "<br>";
}

mysqli_close($con);
?>






</body>
</html>