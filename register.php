<?php session_start();?>
<?php 
$stud_id=$_POST['stud_id'];
$name=$_POST['stud_name'];
$roll_no=$_POST['roll_no'];
$branch=$_POST['branch'];
$class=$_POST['class'];
$gender=$_POST['gender'];
$religion=$_POST['religion'];
$caste=$_POST['caste'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$address=$_POST['address'];
$pin=$_POST['pin'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'bpcit_db1');
$q1="insert into student values ('$stud_id','$name','$roll_no','$class','$gender','$branch','$religion','$caste','$country','$state','$city','$address','$pin','$mobile','$email','$password')";

$status=mysqli_query($con,$q1);
mysqli_close($con);
?>
<?php
if($status==1)
{
header('location:http://localhost:8080/student/login.php');
} 
else
{
	
header('location:http://localhost:8080/student/registrationform.php');	
}

?>
