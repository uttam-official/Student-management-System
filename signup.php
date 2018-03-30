<?php session_start();
if(!isset ($_SESSION['pass']))
	header ('location:http://localhost:8080/admin/adminLogin.php');

?>
<?php 
$office_id=$_POST['office_id'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'bpcit_db1');
$q1="insert into staff values ('$office_id','$name','$mobile','$email','$password')";

$status=mysqli_query($con,$q1);
mysqli_close($con);
?>


<html><body>
<?php
if($status==1)
{
?>
<table><tr><th><h5>DO YOU WANT TO INSERT MORE RECORD ?</th></h5>
<td><a href="staffsignup.php">CLICK HERE</a></td></tr>
<tr><th><h5>DO YOU WANT TO VIEW INSERTED RECORD ?</th></h5>
<td><a href="viewStaff.php">CLICK HERE</a></td></tr>
<tr><th><h5>FOR SIGN OUT</th></h5>
<td><a href="http://localhost:8080/admin/adminLogout.php">CLICK HERE</a></td></tr>


</table>
<?php
}
?>
<?php
if($status!=1)
{
	
header('location:http://localhost:8080/staff/staffSignup.php');	
}
?><br/><br/>



<footer style="color:white;position:relative;top:30px; height:100px;background-color:gray; "><center><br/><br/>copyright &copy 2018  :   developed and maintained by khuntia & khuntia company pvt ltd <br/>
All Rights Reserved</center></footer>

</body></html>

