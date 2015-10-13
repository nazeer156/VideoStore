<!DOCTYPE html>
<html>
<body>
 
<table style="width:1363px;" cellpadding="20" cellspacing="10">
<tr>
<td colspan="2" style="background-color:#6E6E6E;">
<center> <h1 style="margin:0;padding:0;">VIDEO STORE!!</h1> 

&nbsp&nbsp&nbsp<a href="home.php"><font color="#D8D8D8">HOME</font></a>
  &nbsp&nbsp&nbsp<a href="adminlogin.php"><font color="#D8D8D8">ADMIN</font></a>
  &nbsp&nbsp&nbsp<a href="membermain.php"><font color="#D8D8D8">MEMBER</font></a>
   &nbsp&nbsp&nbsp<a href="employeemain.php"><font color="#D8D8D8">EMPLOYEE</font></a>
  &nbsp&nbsp&nbsp<a href="contact.html"><font color="#D8D8D8">CONTACT US</font></a> 
&nbsp&nbsp&nbsp<a href="moviedisplay.php"><font color="#D8D8D8">view movies</font></a>   
</center>

</td>
</tr>

<tr>
<td style="background-color:#6E6E6E;width:350px;vertical-align:top;">
ADD A FULL TIME EMPLOYEE HERE:
<form action = 'employeeadded1.php' method="post">
EmployeeId: <input type="text" name="employeeid"><br>
Name: <input type="text" name="name"><br>
Address: <input type="text" name="address"><br>
Phone: <input type="text" name="phone"><br>
Salary: <input type="text" name="salary"><br>
MType: <input type="text" name="mtype"><br>
StoreId: <input type="text" name="storeid"><br>
<input type="submit" value = "ADD"><br>
</form>

</td>


<td style="background-color:#eeeeee;height:350px;width:400px;vertical-align:top;">
ADD A PART_TIME EMPLOYEE HERE:
<form action = 'employeeadded2.php' method="post">
EmployeeId: <input type="text" name="employeeid"><br>
Name: <input type="text" name="name"><br>
Address: <input type="text" name="address"><br>
Phone: <input type="text" name="phone"><br>
StoreId: <input type="text" name="storeid"><br>
Rate:<input type="text" name = "rate"><br>
<input type = "submit" value = "ADD">
</form>

</td>
</tr>


<tr>
<td colspan="2" style="background-color:#6E6E6E;text-align:center;">
Copyright © VAMSI KRISHNA SEGU</td>
</tr>
</table>
 
</body>
</html>
