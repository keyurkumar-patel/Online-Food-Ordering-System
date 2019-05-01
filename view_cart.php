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
<script type="text/javascript" src="jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="jquery.easyui.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#ff').form({
				url:'reg_ins.php',
				onSubmit:function(){
					return $(this).form('validate');
				},
				success:function(data){
					$.messager.alert('Info', data, 'info');
				}
				
				
			});
		});
	</script>

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

		 <div class="view-cart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action=fastfood_order_ins.php>';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT fastfood_id,fastfood_name,fastfood_description, prize FROM fastfood WHERE fastfood_id='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		    echo '<li class="cart-itm">';
			echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			echo '<div class="p-price">'.$currency.$obj->prize.'</div>';
            echo '<div class="product-info">';
			echo '<h3>'.$obj->fastfood_name.' (Code :'.$product_code.')</h3> ';
            echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
            echo '<div>'.$obj->fastfood_description.'</div>';
			echo '</div>';
            echo '</li>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->fastfood_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->fastfood_description.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			echo '<input type="hidden" name="ordertotal" value="'.$total.'" />';
			
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<span class="check-out-txt">';
		echo '<strong>Total : '.$currency.$total.'</strong>  ';
		echo '</span>';
		
		
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>
    <table width="750" >
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Mobile No.:</td>
                      <td><input type="text" name="mobileno" id="mobileno"  required="true" maxlength="10"  class="easyui-numberbox"/></td>
                    </tr>
                    <tr>
                      <td>Delievery Address:</td>
                      <td><label>
                        <textarea name="delieveryadd" id="delieveryadd" cols="45" rows="5" required="true"></textarea>
                      </label></td>
                    </tr>
                    <tr>
                      <td>City:</td>
                      <td><input type="text" name="city" id="city" required="true"/></td>
                    </tr>
                    <tr>
                      <td>Pincode:</td>
                      <td><input name="pincode" type="text" id="pincode" required="true" maxlength="6" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input type="submit" name="submit" id="submit" value="Submit" />
                      </label></td>
                    </tr>
                  </table>
                  </form>
		    </div>
		
    
                
                
                
                
                
                
                
                
                
                
                
				<div style="clear: both;"></div>
				</div>
                
                
                
                
          </td>
          </tr>
          </table></td>
    <td valign="top"><h2>&nbsp;</h2>
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
