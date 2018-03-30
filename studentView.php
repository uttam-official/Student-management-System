<!DOCTYPE HTML>
<HTML>
<TITLE>student view</TITLE>
<BODY>
<h1><b><center>BIPRADAS PAL CHOWDHURI INSTITUTE OF TECHNOLOGY</center></b></h1>
<h2><b><i><u><center>WEL COME TO STUDENT MANAGEMENT SYSTEM</center></u></i></b></h2>

<form action="view1.php" method="post">
<table> <tr>SELECT OPTION</tr>
<tr><th>CLASS :</th><td><select name="class" size=1>
                                 <option value="FIRST YEAR" selected >FIRST YEAR</option>
								 <option value="SECOND YEAR">SECOND YEAR</option>
								 <option value="THIRD YEAR" >THIRD YEAR</option></SELECT>
</td></tr>
<tr><th>BRANCH :</th><td><SELECT name="branch" size=1 >
                                 <option value="COMPUTER SC. & TECHNOLOGY" selected >COMPUTER SC. & TECHNOLOGY</option>
								 <option value="MECHANICAL ENGINEERING">MECHANICAL ENGINEERING</option>
								 <option value="ELECTRICAL ENGINEERING">ELECTRICAL ENGINEERING</option>
								 <option value="CIVIL ENGINEERING"  >CIVIL ENGINEERING</option>
								 </SELECT>
</td>
</tr>
<tr><th><button type="submit">SHOW</button></th></tr>
</table>
</form>
<form action="view2.php" method="post">
<table> <tr>SEARCH STUDENT BY NAME</tr>
<tr><th>NAME :</th><td><input type="text" name="name"  required SIZE=50/></td></tr>
<tr><th>ROLL NO.:</th><td><input type="text" name="roll"  required size=50/></td></tr>
<tr><th>BRANCH :</th><td><SELECT name="branch" size=1 >
                                 <option value="COMPUTER SC. & TECHNOLOGY" selected >COMPUTER SC. & TECHNOLOGY</option>
								 <option value="MECHANICAL ENGINEERING">MECHANICAL ENGINEERING</option>
								 <option value="ELECTRICAL ENGINEERING">ELECTRICAL ENGINEERING</option>
								 <option value="CIVIL ENGINEERING"  >CIVIL ENGINEERING</option>
								 </SELECT></td></tr>
<tr><th><button type="submit">SEARCH</button></th></tr>
</table></form>


<footer style="color:white;position:relative;top:30px;height:100px;background-color:gray; "><center><br/><br/>copyright &copy 2018  :   developed and maintained by khuntia & khuntia company pvt ltd <br/>
All Rights Reserved</center></footer>

</body>
</html>