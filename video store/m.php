<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<!--<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
--><link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index1.html">Home</a></li>
            <li><a href="empdet.php" class="current">Profiles</a></li>
            <li><a href="abc.html">Upload Circulars</a></li>            
            <li><a href="subpage.html">Send Circulars</a></li>  
            <li><a href="http://localhost/chat/chat.php">Discussion Pannel</a></li> 
            <li><a href="http://localhost/upload_1/add_event.php">Events</a></li>
    	</ul>
    </div> <!-- end of menu -->
    
  <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        
        
			<?php
    
    $connect = mysql_connect('localhost','root','');
    if (!$connect)
    {
    die("MySQL could not connect!");
    }
    
    $DB = mysql_select_db('video store');
    
    if(!$DB)
    {
    die("MySQL could not select Database!");
    }

if (isset($_POST['username'])) {                                                               
    $username = mysql_real_escape_string($_POST['username']);                                  
    $check_for_username = mysql_query("SELECT id FROM users WHERE username='$username'"); 
    if (mysql_num_rows($check_for_username)) {
        echo "Username is COrrect";echo "<br/>";                                                                           
    } else {
        echo "Username is InCOrrect";echo "<br/>";         //No Record Found - Username is available
    }
}

$Name = $_POST['username'];
$Pass = $_POST['password'];
$Query = mysql_query("SELECT * FROM users WHERE Username='$Name' AND Password='$Pass'");
$NumRows = mysql_num_rows($Query);
$_SESSION['username'] = $Name;
$_SESSION['password'] = $Pass;


if(empty($_SESSION['username']) || empty($_SESSION['password']))
{
echo "<br/>";
die("Go back and login before you visit this page!");
}

if($Name && $Pass == "")
{echo "<br/>";
die("Please enter in a name and password!");
}

if($Name == "")
{echo "<br/>";
die("Please enter your name!" . "</br>");
}

if($Pass == "")
{echo "<br/>";
die("Please enter a password!");
echo "</br>";
}



if($NumRows != 0)
{
while($Row = mysql_fetch_assoc($Query))
{
$Database_Name = $Row['username'];
$Database_Pass = $Row['password'];
}
}
else
{echo "<br/>";
die("Incorrect Username or Password!");
}

if($Name == $Database_Name && $Pass == $Database_Pass)
{
// If The User Makes It Here Then That Means He Logged In Successfully
echo "Hello " . $_SESSION['username'] . "!";
}

$connect = mysql_connect('localhost','root','');
if (!$connect)
{
die("MySQL could not connect!");
}

$DB = mysql_select_db('database');

if(!$DB)
{echo "<br/>";
die("MySQL could not select Database!");
}




?>
<html>
<body bgcolor="YELLOW" background="access.jpg">
<?php
$connect = mysql_connect('localhost','root','');
if (!$connect)
{
die("MySQL could not connect!");
}

$DB = mysql_select_db('database');

if(!$DB)
{
die("MySQL could not select Database!");
}



$u=$_SESSION['username'];
$p=$_SESSION['password'];

$a = mysql_query("SELECT section FROM users WHERE username ='$u' AND password='$p'");
$row = mysql_fetch_row($a);
$c = $row[0];
if($c == "Administrator")
{
header( "refresh:3;url=http://localhost/upload_1/empdet.php" );
}
elseif($c == "hr")
{
header( "refresh:3;url=http://localhost/upload_1/hr_emp_det.php" );
}
else
{
header( "refresh:3;url=http://localhost/upload_1/empl_emp_det.php" );

}

?>
</body>
</html>
        
        
        
        
        
        </div>
  </div>

  <!-- end of header -->
    
    <div id="templatemo_content"><!-- end of content left -->
        
        <div id="templatemo_content_right">
          <div class="cleaner_with_width">&nbsp;</div>
          <?php

$dbconn=mysql_connect('localhost','root','');
mysql_select_db('database',$dbconn);
?>


<html>
<body bgcolor="GREEN">
<table >

<form name="form" method="POST" action="mysqlp.php">

<center>
<table border="5" bgcolor="#1A1A1A">
<tr>

<?php

$result = mysql_query("SELECT * FROM users");
while($row=mysql_fetch_array( $result ))
{


}

?>

</table>
</center>
<p><br/>
  <font color="black">
    <a href="http://localhost/chat/chat.php"><font color="black"></a></font></p>
<p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<br/><br/>
</form>
</body>
</html>
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
    <div id="templatemo_footer">
    
	       <a href="subpage.html">Home</a> | <a href="#">Contact Us</a><br />
        Copyright © 2024<strong> KRUNAL SHAH</strong>| Designed by Krunal Shah</div> 
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->
</body>
</html>