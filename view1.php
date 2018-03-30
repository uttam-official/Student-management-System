<?php 
$class=$_POST['class'];
$branch=$_POST['branch'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bpcit_db1');
$q="select*from student where class='$class' && branch='$branch'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

mysqli_close($con);
?>
<!DOCTYPE HTML>
<HTML><head>
<TITLE>student view</TITLE>
<style type="text/css" >
th{
	background-color:yellow;color:red;

}
td{
	background-color:orange;color:white;

}
table{
	background-color:blue;

}


</style>

</head>
<BODY>
<h1><b><center>BIPRADAS PAL CHOWDHURI INSTITUTE OF TECHNOLOGY</center></b></h1>
<h2><b><i><u><center>WEL COME TO STUDENT MANAGEMENT SYSTEM</center></u></i></b></h2>



<table border="solid" style="background-color: khaki; border-color:white;">
<tr>
<th>STUDENT ID</th>
<th>STUDENT NAME</th>
<th>ROLL NO.</th>
<th>BRANCH</th>
<th>CLASS</th>
<th>GENDER</th>
<th>RELIGION</th>
<th>CASTE</th>
<th>COUNTRY</th>
<th>STATE</th>
<th>CITY</th>
<th>ADDRESS</th>
<th>PIN CODE</th>
<th>MOBILE</th>
<th>E-MAIL</th>
</tr>
<?php 
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
?>
<tr><td style="text-transform:uppercase;"><?php echo $row['stud_id']; ?></td>
<td style="text-transform:uppercase;"><?php echo $row['name']; ?></td>
<td><?php echo $row['roll']; ?></td>
<td><?php echo $row['branch']; ?></td>
<td><?php echo $row['class']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['religion']; ?></td>
<td><?php echo $row['caste']; ?></td>
<td><?php echo $row['country']; ?></td>
<td><?php echo $row['state']; ?></td>
<td style="text-transform:uppercase;"><?php echo $row['city']; ?></td>
<td style="text-transform:uppercase;"><?php echo $row['address']; ?></td>
<td><?php echo $row['pin']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['email']; ?></td>
</tr>
<?php
}
?>




</table>

<center><button>

<a href="javascript:void(0);" onclick="printPage();">Print</a> 
    
    <script type="text/javascript">
     function printPage(){
            var tableData = '<table border="1">'+document.getElementsByTagName('table')[0].innerHTML+'</table>';
            var data = '<button onclick="window.print()">Printed Copy</button>'+tableData;       
            myWindow=window.open('','','width=800,height=600');
            myWindow.innerWidth = screen.width;
            myWindow.innerHeight = screen.height;
            myWindow.screenX = 0;
            myWindow.screenY = 0;
            myWindow.document.write(data);
            myWindow.focus();
        };
     </script>
	 
	 </button></center>
	 <br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
To Verify More Details please <a href="http://localhost:8080/student/studentView.php"><button>click here</button></a><br/>
To Exit or Logged Out Please  <a href="http://localhost:8080/staff/staffsignout.php"><button>click here</button></a><br/><br/>
​​​
<footer style="color:white;position:relative;top:30px;height:100px;background-color:gray; "><center><br/><br/>copyright &copy 2018  :   developed and maintained by khuntia & khuntia company pvt ltd <br/>
All Rights Reserved</center></footer>​​​
</body>
</html>
