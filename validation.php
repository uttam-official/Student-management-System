<?php 
session_start();
$stud_id=$_POST['stud_id'];
$password=$_POST['password'];
$massag="ok boss";

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'bpcit_db1');
$q="select * from student where stud_id='$stud_id' && password='$password' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);


if($num==1)
{
	session_start();
$row=mysqli_fetch_array($result);
	$_SESSION['stud_id']=$stud_id;
	$_SESSION['stud_name']=$row['name'];
	$_SESSION['roll']=$row['roll'];
	$_SESSION['branch']=$row['branch'];
	$_SESSION['class']=$row['class'];
	$_SESSION['gender']=$row['gender'];
	$_SESSION['religion']=$row['religion'];
	$_SESSION['caste']=$row['caste'];
	$_SESSION['country']=$row['country'];
	$_SESSION['state']=$row['state'];
	$_SESSION['address']=$row['address'];
	$_SESSION['city']=$row['city'];
	$_SESSION['pin']=$row['pin'];
	$_SESSION['mobile']=$row['mobile'];
	$_SESSION['email']=$row['email'];
	header ('location:http://localhost:8080/student/details.php');
	
	
	
}
else
{   session_start();
	$_SESSION['massag']=$massag;
	header ('location:http://localhost:8080/student/login.php');
	
}
mysqli_close($con);

?>