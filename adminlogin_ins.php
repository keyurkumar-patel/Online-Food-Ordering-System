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
	<div id="header-wrapper" class="container">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Fast Food Shack</a></h1>
			</div>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="#">Home</a></li>
					<li></li>
				  <li></li>
				  <li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		    <img src="images/img03.png" width="1000" height="40" alt="" /></div>
		<div></div>
  </div>
	<!-- end #header -->
	<div id="banner">
		<div class="content"><img src="images/img04.jpg" width="980" height="270" alt="" /></div>
		<div><img src="images/img03.png" width="1000" height="40" alt="" /></div>
	</div>
	<div id="page" style="background-color:#FFFFFF;">
		<div id="content">
		  <table width="700">
          <tr>
          <td><?php
$EmailID=$_POST ['emailid'];
$password=$_POST ['password'];
$login=$_POST['login'];

$resr=mysql_query("select * from admin where admin_emailid='$EmailID' and admin_password='$password'") or die(mysql_error());
if(mysql_num_rows($resr)>0)
{
$_SESSION['adminemail']=$EmailID;
	header("location:adminhomepage.php");
	
}
else
{
	echo "invalid user name or password";
}

?>
          </td>
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
