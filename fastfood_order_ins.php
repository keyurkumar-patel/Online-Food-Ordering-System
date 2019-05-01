<?php
include "conn.php";
if(!isset($_SESSION['r_id']))
{
header("location:fastfood_order_ins.php");
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
    <td><table width="700">
          <tr>
          <td>
          <div class="post">
Total Amount:
<?php
$mobileno=$_POST['mobileno'];
$delievery_add=$_POST['delieveryadd'];
$City=$_POST['city'];
$Pincode=$_POST['pincode'];
echo $_POST['ordertotal'];
$d = date('Y-m-d');
mysql_query("insert into fastfood_order values('',$_SESSION[r_id],$_POST[ordertotal],'$d','$mobileno','$delievery_add','','','$City','$Pincode','pending')") 
or die(mysql_error());

 $r = mysql_query("select max(order_id) as orderid from fastfood_order") or die(mysql_error());
 $rowmax= mysql_fetch_array($r,MYSQL_ASSOC);
 
 //echo $rowmax["orderid"];


    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT fastfood_id,fastfood_name,fastfood_description, prize FROM fastfood WHERE fastfood_id='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
	
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

         
			//echo $obj->fastfood_name."<br>";
			//echo $product_code."<br>";
			//echo $cart_itm["qty"]."<br>";
			
			$fname = $obj->fastfood_name;
			$fid = $product_code;
			$qty = $cart_itm["qty"];
			
			//echo $fname."<br>";
			//echo $fid."<br>";
			//echo $qty;
		mysql_query("insert into order_details values($rowmax[orderid],'$fname',$fid,$qty)") or die(mysql_error()); 
			$cart_items ++;
			
        }
}  
	
    ?>  
<br>
        Order Submited Successfully.</div>          </td>
          </tr>
          </table></td>
    </tr>
</table></div>
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
