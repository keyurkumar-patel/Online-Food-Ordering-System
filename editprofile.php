<?php
include "conn.php";
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
           <?php
				$q="select * from registration where EmailID='$_SESSION[email]'";
				$a=$db->fetch_all_array($q);
				foreach($a as $k=>$v)
				{
				?>
				<form id="form1" method="post" action="editprofile_ins.php">
                  <table width="750" class="formtable" >
                    <tr>
                      <td colspan="2" class="formtitle">Edit Profile</td>
                      </tr>
                    <tr>
                      <td>First Name:</td>
                      <td><label>
                      <input type="text" name="fname" id="fname" required="true" value="<?php echo $v['fname'];?>" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>Last Name:</td>
                      <td><label>
                      <input type="text" name="lname" id="lname" required="true" value="<?php echo $v['lname'];?>"/>
                      </label></td>
                    </tr>
                  
                    <tr>
                      <td>Address:</td>
                      <td><label>
                        <textarea name="address" id="address" cols="45" rows="5" required="true" ><?php echo $v['address'];?></textarea>
                        <br />
                      </label></td>
                    </tr>
                    <tr>
                      <td>City:</td>
                      <td><input type="text" name="city" id="city" required="true" value="<?php echo $v['city'];?>"/></td>
                    </tr>
                    <tr>
                      <td>State:</td>
                      <td><input type="text" name="state" id="state" required="true" value="<?php echo $v['state'];?>"/></td>
                    </tr>
                    <tr>
                      <td>Pincode:</td>
                      <td><input type="text" name="pincode" id="pincode" required="true" class="easyui-numberbox" value="<?php echo $v['pincode'];?>"/></td>
                    </tr>
                    
                    <tr>
                      <td>&nbsp;</td>
                      <td><input name="submit" type="submit" class="formtitle" id="submit" value="Submit" /></td>
                    </tr>
                  </table>
              </form>
				<?php
				}
				?>
				<div style="clear: both;"></div>
				</div>
          </td>
          </tr>
          </table></td>
    <td valign="top">
    <h2>customer Menu</h2>
					<ul>
						<li><a href="changepassword.php">Change Password</a></li>
						<li><a href="editprofile.php">Edit Profile</a></li>
						<li><a href="#">Top deals </a></li>
					
					</ul>
    
    <h2>Categories</h2>
					
					<?php
                    include "catdisplay.php";
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
