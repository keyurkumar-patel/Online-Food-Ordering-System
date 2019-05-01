<?php
session_start();
if(!isset($_SESSION['email']))
{
header("location:index.php");
}
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
	include "headin.php"; 
	?>
	<div id="page" style="background-color:#FFFFFF;">
		<div id="content">
		  <table width="900" border="0">
  <tr>
    <td valign="top"><table width="700">
          <tr>
          <td>
          <div class="post">
			
                  <table width="750" class="formtable" >
                    <tr>
                      <td class="formtitle">Forget Password</td>
                      </tr>
                    <tr>
                      <td>
                        <?php
				/*	$oldpassword=$_POST['oldpassword'];
					$newpassword=$_POST['newpassword'];
					mysql_connect('localhost','root','') or die(mysql_error());
					mysql_select_db('itcodes_fastfood');
					$resr=mysql_query("select * from registration where password='$oldpassword'") or die(mysql_error());
if(mysql_num_rows($resr)>0)
{
	mysql_query("update registration set password='$newpassword' where EmailID='$_SESSION[email]'") or die(mysql_error());
	echo "Password Changed Successfully";
}
else
{
	echo "Invalid Oldpassword";
}*/
					?>
                      </td>
                      </tr>
                  </table>
     
				
				<div style="clear: both;"></div>
				</div>
          </td>
          </tr>
          </table></td>
    <td valign="top">
    <h2>User Menu</h2>
					<ul>
						<li><a href="changepassword.php">Change Password</a></li>
						<li><a href="#">Edit Profile</a></li>
						<li><a href="#">Top deals </a></li>
					
					</ul>
    
    <h2>Categories</h2>
					<ul>
						<li><a href="#">Pizzas</a></li>
						<li><a href="#">Sandwiches</a></li>
						<li><a href="#">Burgers</a></li>
						<li><a href="#">Garlic Bread Sticks</a></li>
						<li><a href="#">French Fries</a></li>
                        <li><a href="#">Rolls</a></li>
					</ul></td>
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
