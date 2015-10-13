<html>
<head>
<title> 

Movies rent

</title>

<body bgcolor="#6E6E6E"  text="#D8D8D8">

       
       <!--Header-->	

<center><b><h1>YOU HAVE ARRIVED VIDEO STORE WEBPAGE!</h1></b></center>
<?php
require('conn.php');
$result=mysqli_query($con, "Select * from movie");
?>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="3" bgcolor="#FFFFFF"><strong>movie list</strong> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>movie name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>director</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>producer</strong></td>
</tr>

<?php

while ($row=mysqli_fetch_array($result)) {
?>

<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox" type="checkbox" value="<?php echo $row['Title']; ?>"></td>
<td bgcolor="#FFFFFF"><?php echo $row['Title']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['Director']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['Producer']; ?></td>
</tr>

<?php
}
?>

 

<?php

while ($row=mysqli_fetch_array($result)) {
?>

<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox" type="checkbox" value="<?php echo $row['Title']; ?>"></td>
<td bgcolor="#FFFFFF"><?php echo $row['Title']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['Director']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['Producer']; ?></td>
</tr>

<?php
}
?>
<tr>
<td colspan="4" align="center" bgcolor="#FFFFFF"><input name="rent" type="submit" value="rent"></td>
</tr>
<?php



if(isset($_POST['rent']))
{
    $checkbox = $_POST['checkbox'];

for($i=0;$i<count($checkbox);$i++){

$title = $checkbox[$i];
$sql = "select * FROM movie WHERE movie.Title='$title'";
$result1 = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result1);
echo $row['Title'];
}

 }



?>


</head>
</html>