<?php 

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bpcit_db1');
$q="select*from staff ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

mysqli_close($con);
?>
<!DOCTYPE HTML>
<html><head>
<title>staff view page</title>
<style type="text/css" >
th{
	background-color:yellow;color:red;

}
td{
	background-color:orange;color:white;

}
table{
	border:solid;background-color:blue;border-color:red;width:900px;

}


</style>
</head>
<body>
<h1 style="text-shadow:4px 6px 3px gray;"><font color="lite blue" size=20 face="Algerian"><b><center>BIPRADAS PAL CHOWDHURI INSTITUTE OF TECHNOLOGY</center></b></font></h1>
<h1><font color="sky blue"  face="Bernard MT Condensed"><b><i><u><center>WEL COME TO STUDENT MANAGEMENT SYSTEM</center></u></i></b></font></h1>
<center><table border="solid" color="red">
<tr>
<th>OFFICE ID</th>
<th>NAME</th>
<th>MOBILE NO</th>
<th>EMAIL ID</th></tr><tr>
<?php 
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
?>
<td style="text-transform:uppercase;"><?php echo $row['office_id']; ?></td>
<td style="text-transform:uppercase;"><?php echo $row['name']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['email']; ?></td>
</tr>
<?php
}
?> 

</table></center><h5>DO YOU WANT TO INSERT MORE RECORD ?</h5><a href="staffsignup.php">CLICK HERE</a><BR/>
<h5>FOR SIGN OUT</h5>
<a href="http://localhost:8080/admin/adminLogout.php">CLICK HERE</a><BR/><br/>





<footer style="color:white;position:relative;top:30px;height:100px;background-color:gray; "><center><br/><br/>copyright &copy 2018  :   developed and maintained by khuntia & khuntia company pvt ltd <br/>
All Rights Reserved</center></footer>

</body>




</html>