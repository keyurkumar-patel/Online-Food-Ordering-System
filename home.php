<?php
include "conn.php";
?>

<?php
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
				<h2 class="title"><a href="#">CUSTOMER HOME	</a></h2>
				</div>
          </td>
          </tr>
          </table></td>
    <td valign="top">
    <h2>CUSTOMER Menu</h2>
					<ul>
						<li><a href="changepassword.php">Change Password</a></li>
						<li><a href="editprofile.php">Edit Profile</a></li>
					  <li><a href="#">Top deals </a></li>
					
					</ul>
    
    <h2>Categories</h2>
					<?php
                    include "catdisplay.php";
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
