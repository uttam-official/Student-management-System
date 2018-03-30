<?php
session_start();




 ?>




<!DOCTYPE html>
<html>
<head><title>STAFF SIGNIN</title></head>
<body  style="position:relative;top:200px;"><CENTER>
<p style="color:yellow;">!  Please Log-In here with Your given correct details</p>
<form action="validation2.php" method="post">

<table style="border:solid;border-color:white;background-color:khaki; height:200px;width:800px;">
<tr><th>OFFICE ID :</th><td><input type="text" name="office_id"  size=80 required /></td></tr>
<tr><th> PASSWORD :</th><td><input type="password" name="password" size=80 required /></td></tr>
<tr><td><button TYPE="submit" style="position:relative;left:650px;">SIGNING IN</button></td></tr>
</table>
</form>
<br/><a href="http://localhost:8080/home/home.php">GO TO HOME</a></center><BR/><BR/>


<footer style="color:white;position:relative;top:30px;height:100px;background-color:gray; "><center><br/><br/>copyright &copy 2018  :   developed and maintained by khuntia & khuntia company pvt ltd <br/>
All Rights Reserved</center></footer>
</body>
</html> 
