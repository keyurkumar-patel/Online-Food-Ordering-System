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
 <link href="jquery.bxslider/jquery.bxslider.css" type="text/css" rel="stylesheet" />
       <script src="jquery.bxslider/jquery.min.js"></script>
<script src="jquery.bxslider/jquery.bxslider.js"></script>
<script src="jquery.bxslider/jquery.bxslider.min.js"></script>
<script src="jquery.bxslider/plugins/jquery.easing.1.3.js"></script>
<script src="jquery.bxslider/plugins/jquery.fitvids.js"></script>
</head>
<body>
<div id="wrapper">
		<?php
	include "headout.php"; 
	?>
	<div id="page" style="background-color:#FFFFFF;">
		<div id="content">
		  <table width="700">
          <tr>
          <td><?php
$EmailID=$_POST ['emailid'];
$password=$_POST ['password'];
$login=$_POST['login'];
$q="select * from registration where emailid='$EmailID' and password='$password'";
$resr=mysql_query($q) or die(mysql_error());
if(mysql_num_rows($resr)>0)
{
$a=$db->fetch_all_array($q);
echo "<table>";
foreach($a as $k=>$v)
{
$_SESSION["r_id"]=$v['r_id'];
$_SESSION['email']=$EmailID;
	header("location:home.php");
}	
}
else
{
	echo "invalid user name or password";
}

?></td>
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
