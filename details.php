<?php 
session_start();
if(!isset ($_SESSION['stud_id']))
	header ('location:http://localhost:8080/student/login.php');


?>
<!DOCTYPE HTML>
<HTML>
<TITLE>YOUR DETAILS</TITLE>
<BODY>
<h1><b><center>BIPRADAS PAL CHOWDHURI INSTITUTE OF TECHNOLOGY</center></b></h1>
<h2><b><i><u><center>WEL COME TO STUDENT MANAGEMENT SYSTEM</center></u></i></b></h2>
<center><table border="solid" bgcolor="pink">
<tr><th>STUDENT ID :</TH><td style="text-transform:uppercase;"><?php echo $_SESSION['stud_id'];?></td><tr>
<tr><th>YOUR NAME :</TH><td style="text-transform:uppercase;"><?php echo $_SESSION['stud_name'];?></td><tr>
<tr><th>ROLL NO. :</TH><td><?php echo $_SESSION['roll'];?></td><tr>
<tr><th>BRANCH :</TH><td><?php echo $_SESSION['branch'];?></td><tr>
<tr><th>CLASS :</TH><td><?php echo $_SESSION['class'];?></td><tr>
<tr><th>GENDER :</TH><td><?php echo $_SESSION['gender'];?></td><tr>
<tr><th>RELIGION :</TH><td><?php echo $_SESSION['religion'];?></td><tr>
<tr><th>CASTE :</TH><td><?php echo $_SESSION['caste'];?></td><tr>
<tr><th>CITY :</TH><td style="text-transform:uppercase;"><?php echo $_SESSION['city'];?></td><tr>
<tr><th>ADDRESS :</TH><td style="text-transform:uppercase;"><?php echo $_SESSION['address'];?></td><tr>
<tr><th>PIN :</TH><td><?php echo $_SESSION['pin'];?></td><tr>
<tr><th>MOBILE :</TH><td><?php echo $_SESSION['mobile'];?></td><tr>
<tr><th>E-MAIL :</TH><td><?php echo $_SESSION['email'];?></td><tr>



</table>

<a href="javascript:void(0);" onclick="printPage();"><button size="10">Print</button></a> 
    
    <script type="text/javascript">
     function printPage(){
            var tableData = '<table border="1">'+document.getElementsByTagName('table')[0].innerHTML+'</table>';
            var data = '<button onclick="window.print()">Printed copy</button>'+tableData;       
            myWindow=window.open('','','width=800,height=600');
            myWindow.innerWidth = screen.width;
            myWindow.innerHeight = screen.height;
            myWindow.screenX = 0;
            myWindow.screenY = 0;
            myWindow.document.write(data);
            myWindow.focus();
        };
     </script>



</center>


<p>To Logged out Please</p><a href="http://localhost:8080/student/studentlogout.php">CLICK HERE</a><br/><br/>
<footer style="color:white;position:relative;top:30px;height:100px;background-color:gray; "><center><br/><br/>copyright &copy 2018  :   developed and maintained by khuntia & khuntia company pvt ltd <br/>
All Rights Reserved</center></footer><br/>
</body>
</html>
