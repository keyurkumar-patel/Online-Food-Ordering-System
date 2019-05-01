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

<link href="easyui.css" rel="stylesheet" type="text/css"/>
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
	include "headout.php"; 
	?>
	<div id="page" style="background-color:#FFFFFF;">
		<div id="content">
		  
             <table width="900" border="0" >
  <tr>
    <td width="200"><img src="images/homebanner.jpg" alt="" width="200" height="700" /></td>
<td valign="top">    
  <h1>The deals start here! Join Fast Food Shack.</h1>

<p style="padding:10px;">Sign up now and get incredible deals sent right to your inbox or cell phone. It’s a great way to stay on top of what’s new at Fast Food Shack.</p>
<br />
 <form action="reg_ins.php" method="post" enctype="multipart/form-data">
                  <table width="650" align="center" class="formtable">
                    <tr class="formtitle">
                      <td colspan="2" >Sign Up</td>
                    </tr>
                    <tr>
                      <td>First Name:</td>
                      <td><label>
                        <input type="text" name="fname" id="fname" required="true" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>Last Name:</td>
                      <td><input type="text" name="lname" id="lname" required="true"/></td>
                    </tr>
                    <tr>
                      <td>Gender:</td>
                      <td><label>
                        <input name="gender" type="radio" id="gender" value="male" />
                        Male
                        <input name="gender" type="radio" id="gender" value="female" />
                        Female </label></td>
                    </tr>
                    <tr>
                      <td>Address:</td>
                      <td><label>
                        <textarea name="address" id="address" cols="45" rows="5" required="true"></textarea>
                      </label></td>
                    </tr>
                    <tr>
                      <td>City:</td>
                      <td><label>
                        <input type="text" name="city" id="city" required="true"/>
                      </label></td>
                    </tr>
                    <tr>
                      <td>State:</td>
                      <td><input type="text" name="state" id="state" required="true"/></td>
                    </tr>
                    <tr>
                      <td>Pincode:</td>
                      <td><input type="text" name="pincode" id="pincode" required="true" class="easyui-numberbox" maxlength="6"/></td>
                    </tr>
                    <tr>
                      <td>Emal ID:</td>
                      <td><input type="text" name="emailid" id="emailid" required="true" validType="email" class="easyui-validatebox"/></td>
                    </tr>
                    <tr>
                      <td>Password:</td>
                      <td><label>
                        <input type="password" name="password" id="password" required="true" class="easyui-validatebox" data-options="validType:'minLength[5]'"/>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Mobile No.:</td>
                      <td><label>
                      <input type="text" name="mobileno" id="mobileno" required="true" maxlength="10"  data-options="validType:'minLength[5]'" class="easyui-numberbox"/>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Security Question:</td>
                      <td><label>
                        <select name="securityque" id="securityque">
                          <option>what is your nickname?</option>
                          <option>what is your birthcity?</option>
                          <option>what is your favourite movie?</option>
                          <option>what is your favourite book?</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Security Answer:</td>
                      <td><label>
                        <input type="text" name="securityans" id="securityans" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input name="submit" type="submit" class="formtitle" id="submit" value="Submit" />
                      </label></td>
                    </tr>
                  </table>
                  
                  </form>
                  <br />
                  <p>
                
                  </p>
                 <p style="padding:5px;"> * We respect your privacy and will never share your information. By providing your email address you are opting-in to receive emails from our company. You may ask to stop receiving emails from us at any time. If you’re under 13 years of age, your parent or legal guardian must register you.
                 </p>
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
