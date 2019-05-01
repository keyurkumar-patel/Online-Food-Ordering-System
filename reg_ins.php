<?php
include "conn.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Fast Food Shack</title>

<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<?php
	include "headout.php"; 
	?>
	<div id="page" style="background-color:#FFFFFF;">
		<div id="content">
		  <table width="900" border="0">
  <tr>
    <td><table width="700">
          <tr>
          <td>
          <div class="post">
				<?php
$firstname=$_POST ['fname'];
$lastname=$_POST ['lname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];
$mobileno=$_POST ['mobileno'];

$securityque=$_POST['securityque'];
$securityans=$_POST['securityans'];
$submit=$_POST['submit'];

$res = mysql_query("select * from registration where emailid='$emailid'") or die(mysql_error());
if(mysql_num_rows($res)>0)
{
echo "User With Email Already Exists , Signup with Other Email";
}
else
{
mysql_query("insert into registration values('','$firstname','$lastname',
'$mobileno','$gender','$address','$emailid','$password','$city',$pincode,'$state','$securityque','$securityans','active')") or die(mysql_error());
header("location:login.php");
}
?>


				
				</div>          </td>
          </tr>
          </table></td>
    </tr>
</table>

	  </div>
		<!-- end #content -->
	  <!-- end #sidebar -->
	  <div style="clear: both;">&nbsp;</div>
	</div>
	<div class="container"><img src="images/img03.png" width="1000" height="40" alt="" /></div>
	<!-- end #page --> 
</div>
<div id="footer-content"></div>
<div id="footer">
	<p>Copyright (c) 2014 IT CODES.com. All rights reserved. Design by <a href="http://www.itcodes.com">IT CODES</a></p>
</div>
<!-- end #footer -->
</body>
</html>



