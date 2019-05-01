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
          <tr><h2>Manage Order</h2>
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
  <p>
<?php
$q="select * from fastfood_order where status='pending' order by order_id";
$a=$db->fetch_all_array($q);
echo "<table>";
echo "<tr><td colspan=6 class=formtitle>Pending Orders</td></tr>";
echo "<tr>";
echo "<td>Cust Email</td>";
//echo"<td>{$v['fastfood_id']}</td>";
//echo"<td>{$v['quantity']}</td>";
echo"<td>Date</td>";
echo"<td>TotalAmt</td>";
echo"<td>MobileNo</td>";
echo"<td>Status</td>";
echo"<td></td>";
echo"</tr>";

foreach($a as $k=>$v)
{
echo "<tr>";
echo "<td>R_id:- {$v['r_id']}</td>";
//echo"<td>{$v['fastfood_id']}</td>";
//echo"<td>{$v['quantity']}</td>";
echo"<td>Date:- {$v['date']}</td>";
echo"<td>TotalAmt.:- {$v['total_amount']}</td>";
echo"<td>MobileNo.:- {$v['mobileno.']}</td>";
echo"<td>Status:-{$v['status']}</td>";
echo"<td><a href=orderdetails.php?order_id={$v['order_id']}>Details</a></td>";
echo"</tr>";
}echo "</table>";
?> 
  </p>
  
  
  <p>
<?php
$q="select * from fastfood_order where status='Dispatch' order by order_id";
$a=$db->fetch_all_array($q);
echo "<table>";
echo "<tr><td colspan=6 class=formtitle>Dispatched Orders</td></tr>";
echo "<tr>";
echo "<td>Cust Email</td>";
//echo"<td>{$v['fastfood_id']}</td>";
//echo"<td>{$v['quantity']}</td>";
echo"<td>Date</td>";
echo"<td>TotalAmt</td>";
echo"<td>MobileNo</td>";
echo"<td>Status</td>";
echo"</tr>";

foreach($a as $k=>$v)
{
echo "<tr>";
echo "<td>R_id:- {$v['r_id']}</td>";
//echo"<td>{$v['fastfood_id']}</td>";
//echo"<td>{$v['quantity']}</td>";
echo"<td>Date:- {$v['date']}</td>";
echo"<td>TotalAmt.:- {$v['total_amount']}</td>";
echo"<td>MobileNo.:- {$v['mobileno.']}</td>";
echo"<td>Status:- {$v['status']}</td>";
echo"</tr>";

}echo "</table>";
?>
  </p>
                        <p>&nbsp; 
                          
                                                </p></td>
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
