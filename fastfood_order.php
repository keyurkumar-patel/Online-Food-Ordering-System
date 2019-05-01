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
          <tr>
          <td><table width="1000" >
            <tr>
              <td><form id="form1" method="post" action="fastfood_order_ins.php?pid=<?php echo $_GET['pid']?>">
                  <table width="750" >
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Quantity:</td>
                      <td><label>
                        <input type="text" name="quantity" id="quantity" required="true" class="easyui-numberbox" maxlength="1"/>
                        (Maximum limit 9)
                      </label></td>
                    </tr>
                    <tr>
                      <td>Mobile No.:</td>
                      <td><input type="text" name="mobileno" id="mobileno" required="true" class="easyui-numberbox" maxlength="10"/></td>
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
              </form></td>
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
