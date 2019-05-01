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
	include "headin.php"; 
	?>
	<div id="page" style="background-color:#FFFFFF;">
		<div id="content">
		  <table width="700">
          <tr>
          <td><table width="1000" >
            <tr>
              <td><form id="form1" method="post" action="subcat_ins.php">
                  <table width="750" >
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Fastfood Category:</td>
                      <td><label>
                       <select name="ffcatid" id="ffcatid">
                       		<?php
							$q="select * from fastfood_cat order by cat_id";
							$a=$db->fetch_all_array($q);
							foreach($a as $k=>$v)
							{
							echo "<option value={$v['cat_id']}>"."{$v['cat_name']}"."</option>";
							}
							?> 
                          
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Sub Category Name:</td>
                      <td><label>
                        <input type="text" name="subcatname" id="subcatname" />
                      </label></td>
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
