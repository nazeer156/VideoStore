<html>
<title>DB Project</title>

<body bgcolor="YELLOW" background="access.jpg">
<form action="finish.php" method="POST">
<font color="WHITE">
<h3>Email:</h3> <input type="text" name="email" /></br>
</font>
<font color="WHITE">
<h3>Username:</h3> <input type="text" name="username" /></br></font>
<font color="WHITE">
<h3>Password:</h3> <input type="password" name="password" /></br></font>
<font color="WHITE">
<h3>Re-type Password:</h3> <input type="password" name="re-password" /></br></font>
<font color="WHITE">
<h3>Date Of Birth:</h3> 
<?php
$pageStart = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MY WEBSITE PAGE</title>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $("#date").datepicker();
});
</script>
</head>
<body>
<input type="text" id="date" name="date" />
</body>
</html>';

print $pageStart;

?>
</br></font>
<font color="WHITE">
<h3>Section : <select name="PostedCat" id="PostedCat">

<option value="Administrator">Administrator</option>
<option value="hr">HR</option>
<option value="employee">Employee</option>
</select>


</h3>
<font color="WHITE">
<h3>Salary:</h3> <input type="text" name="salary" /></br></font>
<br/></font>
<font color="WHITE"><h3><a href="http://localhost/upload_1/index.php">Login</a></h3></font>
<br/>
<input type="submit" />
</form>
</body>
</html>