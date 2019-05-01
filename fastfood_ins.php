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
                      <td class="">Inserted Successfully</td>
                      </tr>
                    <tr>
                      <td>
                   <?php
$ffname=$_POST['ffname'];
$ffdesc=$_POST['ffdesc'];
$ffcatid=$_POST['ffcatid'];
$subcat=$_POST['subcat'];
$prize=$_POST['prize'];
$topping=$_POST['topping'];
$submit=$_POST['submit'];
$file="";
$path="fastfoodimg";
include "upload.php";
mysql_query("insert into fastfood values('','$ffname','$ffdesc',
$ffcatid,$subcat,$prize,$topping,'$file')") or die(mysql_error());

?>
                      </td>
                      </tr>
                  </table>
     
				
				<div style="clear: both;"></div>
				</div>
          </td>
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
