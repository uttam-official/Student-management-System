
<?php session_start();
if(!isset ($_SESSION['password']))
	header ('location:http://localhost:8080/admin/adminLogin.php');
$_SESSION['pass']=$_SESSION['password'];
?>
<!DOCTYPE HTML>
<HTML>
<TITLE>REGISTRATION FORM</TITLE>
<BODY>
<h1><b><center>BIPRADAS PAL CHOWDHURI INSTITUTE OF TECHNOLOGY</center></b></h1>
<h2><b><i><u><center>WEL COME TO STUDENT MANAGEMENT SYSTEM</center></u></i></b></h2>
<CENTER><div style="position:relative;top:25px;bottom:40px;"><h1><font color="pink"  face="Algerian">STAFF INSERTATION FORM</font></h1></div></CENTER>

<form action="signup.php" method="post"><center>
<table style="border:solid;border-color:white;background-color:khaki; height:300px;width:800px;">
<tr><th>OFFICE ID :</TH><td><input type="text" NAME="office_id" size=50 required /></td><tr>
<tr><th> NAME :</TH><td><input type="text" NAME="name" size=50 required /></td><tr>
<tr><th>  MOBILE NO. :</th><td><input type="text" name="mobile" size=50 required /> </td><tr>
<tr><th>  EMAIL ID :</th><td><input type="text" name="email" size=50 required /> </td><tr>
<tr><th>  PASSWORD :</th><td><input type="password" name="password" size=50 required /> </td></tr>
<tr><th><button type="submit" style="position:relative;left:650px;">INSERT</button></th></TR>
</table></center></form><br/>
To View Your Staff Please<a href="viewStaff.php">CLICK HERE</a><br/></br>


<footer style="color:white;position:relative;top:30px;height:100px;background-color:gray; "><center><br/><br/>copyright &copy 2018  :   developed and maintained by khuntia & khuntia company pvt ltd <br/>
All Rights Reserved</center></footer>

</body>
</html>