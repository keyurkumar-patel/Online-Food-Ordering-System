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
<link href="style/style.css" rel="stylesheet" type="text/css">
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
				<h2 class="title"><a href="#">CUSTOMER Home </a></h2>

				
    <div class="products">
 
                <p>
                  <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM fastfood where fastfood_cat_id=$_GET[catid]");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="product">'; 
            echo '<form method="post" action="cart_update.php">';
			echo '<div class="product-thumb"><img src="'.$obj->fastfood_image.'" width=90 height=90></div>';
            echo '<div class="product-content"><h3>'.$obj->fastfood_name.'</h3>';
            echo '<div class="product-desc">'.$obj->fastfood_description.'</div>';
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj->prize.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->fastfood_id.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }
    
    }
    ?>
                </p>
                </div>
    
                                
                
				<div style="clear: both;"></div>
				</div>
                
               
          </td>
          </tr>
          </table>
      <p>&nbsp;</p></td>
    <td valign="top">
    <div class="shopping-cart">
      <h2>Your Shopping Cart</h2>
      <?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php" class="formtitle">Check-out</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'" class="formtitle">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>
    </div>
    <h2>&nbsp;</h2>
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
