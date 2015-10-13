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



$title = mysqli_real_escape_string($con, $_POST['title']);
                              
  $sql = mysqli_query($con, "SELECT ObjectId FROM movie NATURAL JOIN store_object WHERE movie.Title='$title'");
   
	$row = mysqli_fetch_array($sql);
	
	$objectid = $row['ObjectId'];
	
	
	 

$sql1 = "DELETE FROM movie WHERE Title = '$title'";

$sql2 = "DELETE FROM store_object WHERE ObjectId = '$objectid'";


$sql3= "DELETE FROM  copy WHERE  ObjectId = '$objectid'";

if (!mysqli_query($con,$sql1)) {
  die('Error: ' . mysqli_error($con));
}
if (!mysqli_query($con,$sql2)) {
  die('Error: ' . mysqli_error($con));
}


if (!mysqli_query($con,$sql3)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record deleted";

?>



</body>
</html>