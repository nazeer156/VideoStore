<html>
<head>			
<?php
include('login.php');
$fullname = @$_POST['fullname'];
$username = @$_POST['username'];
$password = @$_POST['password'];
$retypepassword = @$_POST['retypepassword'];
$submit = @$_POST['submit'];

if($submit){
     
	    if($fullname == true){
		 
                 if($username == true){
		  
		                   if($password == true){
						      
							         if($password == $retypepassword){
									 
									        echo "it works";
									     
                                          }
										  else
										  echo "your passowrd dont match";
                            }
                            else
                            echo "please input a password";

					}
					else
					echo "please input usename";
					
			}
			else
			echo "please enter your fullname";

	};		


?>
</head>
<body>

<form action = "insertuser.php" method ="post">
fullname:<input name="fullname" type = "text"><br>
username<input name="username" type = "text"><br>
password:<input name="password" type = "password"><br>
retypepassword:<input name="retypepassword" type = "password"><br>
<input name="submit" type = "submit" value ="Submit"><br>
</form>




</body>
</html>

