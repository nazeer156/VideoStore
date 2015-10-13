<html>

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
                 

			   		
&nbsp&nbsp&nbsp<a href="home.php"><font color="#D8D8D8">HOME</font></a>
  &nbsp&nbsp&nbsp<a href="adminlogin.php"><font color="#D8D8D8">ADMIN</font></a>
  &nbsp&nbsp&nbsp<a href="membermain.php"><font color="#D8D8D8">MEMBER</font></a>
   &nbsp&nbsp&nbsp<a href="employeemain.php"><font color="#D8D8D8">EMPLOYEE</font></a>
  &nbsp&nbsp&nbsp<a href="contact.html"><font color="#D8D8D8">CONTACT US</font></a> 
&nbsp&nbsp&nbsp<a href="moviedisplay.php"><font color="#D8D8D8">view movies</font></a>   
  	
</center>
			
<hr></hr></h3>



TO Update MEMBER Name And Address CLICK:<form action="updatemember.php" method="post">
<table class="tableborder" align=center bgcolor="#f0f0f2">
    <tr>
  <td style="padding-bottom: 10px;" colspan="2"  text = "#6E6E6E" class="heading1"><b>Update Member</b></td>
</tr>
    <tr>
      <td height="30">MemberId:</td>
      <td><input type="text" name="memberid" style="width:15em;">
      </td>
    </tr>
    <tr>
      <td height="30">MName:</td>
      <td><input type="text" name="mname" style="width:15em;">
      </td>
    </tr>
	<tr>
      <td height="30">Address:</td>
      <td><input type="text" name="address" style="width:15em;">
      </td>
    </tr>
      
    <tr>
    <td><input name="submit" type="submit" value="Update" class="submit"></td></tr>
  </table>
</form>
<br>
<br>
TO Delete menber:<form action="deletemember.php" method="post">
<table class="tableborder" align=center bgcolor="#f0f0f2">
    <tr>
  <td style="padding-bottom: 10px;" colspan="2" class="heading1"><b>Delete Member</b></td>
</tr>
    <tr>
      <td height="30">MemberId:</td>
      <td><input type="text" name="memberid" style="width:15em;">
      </td>
    </tr>
    <tr>
      <td height="30">MName:</td>
      <td><input type="text" name="mname" style="width:15em;">
      </td>
    </tr>  
    <tr>
    <td><input name="submit" type="submit" value="delete" class="submit"></td></tr>
  </table>
</form>
<br>
<br>
TO Check no of titles borrowed:<form action="movietitle.php" method="post">
<table class="tableborder" align=center bgcolor="#f0f0f2">
    <tr>
  <td style="padding-bottom: 10px;" colspan="2" class="heading1"><b>Titles Borrowed</b></td>
</tr>
    <tr>
      <td height="30">MemberId:</td>
      <td><input type="text" name="memberid" style="width:15em;">
      </td>
    </tr>
      
    <tr>
    <td><input name="submit" type="submit" value="submit" class="submit"></td></tr>
  </table>
  </form>
<br>
<br>
Total amount for the items rented:<form action="ta.php" method="post">
<table class="tableborder" align=center bgcolor="#f0f0f2">
    <tr>
  <td style="padding-bottom: 10px;" colspan="2" class="heading1"><b>Total Amount</b></td>
</tr>
    <tr>
      <td height="30">MemberId:</td>
      <td><input type="text" name="memberid" style="width:15em;">
      </td>
    </tr>
      
    <tr>
    <td><input name="submit" type="submit" value="submit" class="submit"></td></tr>
  </table>
</form>
<br>
<br>
Reserved titles for members:<form action="movietitle2.php" method="post">
<table class="tableborder" align=center bgcolor="#f0f0f2">
    <tr>
  <td style="padding-bottom: 10px;" colspan="2" class="heading1"><b>Titles Reserved</b></td>
</tr>
    <tr>
      <td height="30">MemberId:</td>
      <td><input type="text" name="memberid" style="width:15em;">
      </td>
    </tr>
	<tr>
    <td><input name="submit" type="submit" value="submit" class="submit"></td></tr>
	</table>
	</form>
<br>


</body>

</html>
