<?php 
session_start();

$id=$_POST['id'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'bpcit_db1');
$q="select * from admin where id='$id' && password='$password' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$_SESSION['password']=$password;


if($num==1)
{

header ('location:http://localhost:8080/staff/staffSignup.php');
}
else
{
	header ('location:http://localhost:8080/admin/adminlogin.php');
	
}
?>