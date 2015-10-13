<title> 

VIDEO STORE 

</title>

<body bgcolor="#6E6E6E"  text="#D8D8D8">

       
       <!--Header-->	

<center><b><h1>YOU HAVE ARRIVED VIDEO STORE WEBPAGE!</h1></b></center>

	


	<!--menu-->
<h3><hr></hr>
		
<center>
                 

&nbsp&nbsp&nbsp<a href="home.php"><font color="#D8D8D8">HOME</font></a>
  &nbsp&nbsp&nbsp<a href="adminlogin.php"><font color="#D8D8D8">ADMIN</font></a>
  &nbsp&nbsp&nbsp<a href="membermain.php"><font color="#D8D8D8">MEMBER</font></a>
   &nbsp&nbsp&nbsp<a href="employeemain.php"><font color="#D8D8D8">EMPLOYEE</font></a>
  &nbsp&nbsp&nbsp<a href="contact.html"><font color="#D8D8D8">CONTACT US</font></a> 		
  	&nbsp&nbsp&nbsp<a href="moviedisplay.php"><font color="#D8D8D8">view movies</font></a> 
</center>
			
<hr></hr></h3>

<form action = 'movieadded.php' method="post">
ObjectId: <input type="text" name="objectid"><br>
Title: <input type="text" name="title"><br>
Director: <input type="text" name="director"><br> 
Producer: <input type="text" name="producer"> <br>
Actor1: <input type="text" name="actor1"> <br>
Actor2: <input type="text" name="actor2"> <br>
Charge: <input type="text" name="charge"> <br>

Category:<select name="PostedCat" id="PostedCat">
<option value="ACTION">ACTION</option>
<option value="ADVENTURE">ADVENTURE</option>
<option value="COMEDY">COMEDY</option>
<option value="CRIME">CRIME</option>
<option value="SCI-FI">SCI-FI</option>
</select><br>
StoreId: <input type="text" name="storeid"> <br>
<input type= 'submit' value = 'Add Movie'>
</form>
