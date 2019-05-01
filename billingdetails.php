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
		  <table width="700">
          <tr><h2> User Details</h2>
           
          <td><table width="750" >
            <tr>
              <td><form id="form1" method="post" action="cat_ins.php">
                  <table width="750" >
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="2">
                      <td>
                     <?php
				$q="select * from order_details where order_id=$_GET[order_id]";
				$a=$db->fetch_all_array($q);
				foreach($a as $k=>$v)
				{
				echo  "<li>fastfood_name:- {$v['fastfood_name']}</li>";
				echo "<li>fastfood_id:-  {$v['fastfood_id']}</li>";
				echo "<li>Quntity:-  {$v['quantity']}</li>";
							
				}
				?>
                <a href="Deactive.php?pid=<?php echo $_GET['r_id'];?>">Deactive</a>
                <a href="Active.php?pid=<?php echo $_GET['r_id'];?>">Active</a>
                </td>



</td>
                    </tr>
                  </table>
              </form></td>
            </tr>
          </table></td>
           <td valign="top">
    <h2>admin</h2>
  
   <?php
	include "adminmenu.php"; 
	?>
	  
    <h2>&nbsp;</h2>
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
