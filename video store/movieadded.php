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


$objectid = mysqli_real_escape_string($con, $_POST['objectid']);
$title = mysqli_real_escape_string($con, $_POST['title']);
$director = mysqli_real_escape_string($con, $_POST['director']);
$producer = mysqli_real_escape_string($con, $_POST['producer']);
$actor1 = mysqli_real_escape_string($con, $_POST['actor1']);
$actor2 = mysqli_real_escape_string($con, $_POST['actor2']);
$charge = mysqli_real_escape_string($con, $_POST['charge']);
$category = mysqli_real_escape_string($con, $_POST['PostedCat']);
$storeid = mysqli_real_escape_string($con, $_POST['storeid']);
     $x = 0;                           
  $sql = mysqli_query($con, "SELECT MAX(CopyNo) FROM copy NATURAL JOIN movie WHERE movie.Title='$title'")  
   
	$row = mysqli_fetch_array($sql);
	
	$x = $row['MAX(CopyNo)'];
	
	
	if($x == 1){
	$x = 2;
	}
	else
	{
	$x++;
	 }

$sql1="INSERT INTO store_object (ObjectId, DailyCharge)
VALUES ('$objectid', '$charge')";

$sql2="INSERT INTO movie (ObjectId, Title, Category, Director, Producer, Actor1, Actor2, Charge)
VALUES ('$objectid', '$title', '$category', '$director', '$producer', '$actor1', '$actor2', '$charge')";

if (!mysqli_query($con,$sql1)) {
  die('Error: ' . mysqli_error($con));
}
if (!mysqli_query($con,$sql2)) {
  die('Error: ' . mysqli_error($con));
}



$sql3="INSERT INTO  copy (ObjectId, CopyNo, Type, StoreId)
VALUES ('$objectid', '$x', 'Movie', '$storeid')";



if (!mysqli_query($con,$sql3)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

?>



</body>
</html>