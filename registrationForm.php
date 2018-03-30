<?php
session_start();




?>
<!DOCTYPE HTML>
<HTML>
<style type="text/css">
#login
{
	position:fixed;
	top:300px;
	left:700px;
	
}


</style>
<TITLE>REGISTRATION FORM</TITLE>
<BODY>
<h1 style="text-shadow:4px 6px 3px gray;"><font color="lite blue" size=20 face="Algerian"><b><center>BIPRADAS PAL CHOWDHURI INSTITUTE OF TECHNOLOGY</center></b></font></h1>
<h1><font color="sky blue"  face="Bernard MT Condensed"><b><i><u><center>WEL COME TO STUDENT MANAGEMENT SYSTEM</center></u></i></b></font></h1>
<form action="register.php" method="post">
<table bgcolor="khaki" style="border:solid;border-color:white;width:650px;height:1000px;">
<div style="position:relative;left:160px;top:35px;"><h1><font color="pink"  face="Algerian">REGISTRATION FORM</font></h1></div>
<tr><th>STUDENT ID :</TH><td><input type="text" NAME="stud_id" size=50 required /></td><tr>
<tr><th>STUDENT NAME :</TH><td><input type="text" NAME="stud_name" size=50 required /></td><tr>
<tr><th>     ROLL NO.:</th><td><input type="text" name="roll_no" size=50 required /> </td><tr>
<tr><th>      BRANCH :</TH><td><select name="branch" size=1>
                            <option value="COMPUTER SC. & TECHNOLOGY" selected>COMPUTER SC. & TECHNOLOGY</option>
							<option value="MECHANICAL ENGINEERING" >MECHANICAL ENGINEERING</option>
							<option value="ELECTRICAL ENGINEERING" >ELECTRICAL ENGINEERING</option>
							<option value="CIVIL ENGINEERING" >CIVIL ENGINEERING</option>
						</select><td></tr>
<tr><th>       CLASS :</th><td><select name="class" size=1>
                             <option value="FIRST YEAR" selected>FIRST YEAR</OPTION>
                             <OPTION value="SECOND YEAR">SECOND YEAR</option>
                             <option value="THIRD YEAR">THIRD YEAR</option>
						</select></td></tr>
<tr><th>    GENDER :</th><td><input type="radio" name="gender"  value="MALE" checked />MALE
                             <input type="radio" name="gender" value="FEMALE" />FEMALE
							 <input type="radio" name="gender" value="OTHER" />OTHER<td><tr>
							 
<tr><th>    RELIGION :</th><td><select name="religion" size=1>
                            <option value="HINDUISM" selected>HINDUISM</option>
							<option value="MUSLIM">MUSLIM</option>
							<option value="CHRISTAN">CHRISTAN</option>
							<option value="SHIKH">SHIKH</option>
							<option value="OTHER">OTHER</option></select></td></tr>
<tr><th>    CASTE :</TH><td><select name="caste" size=1>
                            <option value="GENERAL" selected>GENERAL</option>
							<option value="OBC-A">OBC-A</option>
							<option value="OBC-B">OBC-B</option>
							<option value="SC">SC</option>
							<option value="ST">ST</option>
							<option value="OTHER">OTHER</option></select></td></tr>
<tr><th> COUNTRY :</th><td><select name="country" size=1>
                             <option value="INDIA" selected>INDIA</OPTION>
							 <option value="BANGLADESH">BANGLADESH</option>
							 <option value="OTHER">OTHER</option></select></td></tr>
<tr><th> STATE :</th><td><select name="state" size=1>
                          <option value="WEST BENGAL" selected>WEST BENGAL</option>
						  <option value="OTHER">OTHER</option></select></td></tr>
						  <tr><th> CITY :</TH><td><input type="text"  name="city" size=50 required /></td></tr>

<tr><th> ADDRESS :</TH><td><input type="text"  name="address" size=50 required /></td></tr>
<tr><th> PIN CODE :</TH><td><input type="text"  name="pin" size=50 required /></td></tr>
<tr><th> MOBILE NO.:</TH><td><input type="text"  name="mobile" size=50 required /></td></tr>
<tr><th> E-MAIL :</TH><td><input type="text"  name="email" size=50 required /></td></tr><br>
<tr><th> PASSWORD :</th><td><input type="password" name="password" size=50 required />
<tr><td style="position:relative;left:500px;"><button  type="submit">REGISTER HERE</button><td></tr>

			
			
</table>
</form>
<form action="validation.php" method="post">
<table id="login" bgcolor="khaki" style="border:solid;border-color:white;width:700px;height:200px">
<div style="position:fixed;left:920px;top:240px;" ><h1><font color="pink" face="Algerian">LOGIN FORM</font></h1></div>

<tr><th>STUDENT ID :</th><td><input type="text" name="stud_id"  size=50 required /></td></tr>
<tr><th> PASSWORD :</th><td><input type="password" name="password" size=50 required /></td></tr>
<tr><td  style="position:relative;left:500px;" ><button TYPE="submit">LOG IN</button></td></tr>
</table>
</form>
<a href="http://localhost:8080/home/home.php"><h5 style="position:fixed;right:0px;bottom:50px;"><u>GO HOME</u></h5></a><br/><br/><br/><br/><br/><br/>
<footer style="color:white;position:relative;top:30px;background-color:gray;height:40px "><center>copyright &copy 2018  :   developed and maintained by khuntia & khuntia company pvt ltd <br/>
All Rights Reserved</center></footer>

</BODY>
</HTML>