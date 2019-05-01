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
          <tr><h2>Add Food Details</h2> 
          
          <td><table width="750" >
            <tr>
              <td><form action="fastfood_ins.php" method="post" enctype="multipart/form-data" id="form1">
                  <table width="750" >
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Food Name:</td>
                      <td><label>
                        <input type="text" name="ffname" id="ffname" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>Food Description:</td>
                      <td><label>
                        <textarea name="ffdesc" id="ffdesc" cols="45" rows="5"></textarea>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Food Category:</td>
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
                      <td> Sub Category:</td>
                      <td>
                     <select name="subcat" id="subcat">
                         <?php
							$q1="select * from sub_cat order by subcat_id";
							$a1=$db->fetch_all_array($q1);
							foreach($a1 as $k1=>$v1)
							{
							echo "<option value={$v1['subcat_id']}>"."{$v1['subcat_name']}"."</option>";
							}
							?> 
                        </select></td>
                    </tr>
                    <tr>
                      <td>Prize:</td>
                      <td><label>
                        <input type="text" name="prize" id="prize" required="true" class="easyui-numberbox" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>Topping:</td>
                      <td><label>
                        <select name="topping" id="topping">
                        <option value="1">Cheese Burst</option>
                        <option value="1">Classic Hand Tossed</option>
                        <option value="1">Wheat Thin Crust</option>
                        <option value="1">Fresh Pan Pizza</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Food Image</td>
                      <td><label>
                        <input type="file" name="uploadFile" id="uploadFile" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                      </tr>
                  </table>
              </form>
              </td>
            </tr>
          </table>
          <?php	
		  $q="select * from fastfood order by fastfood_id";
		  $a=$db->fetch_all_array($q);
		  echo "<table>";
		  foreach($a as $k=>$v)

		  {
		  echo "<tr>";
		  echo "<td>{$v['fastfood_id']}</td>";
		  echo "<td>{$v['fastfood_name']}</td>";
		  echo "<td><img src={$v['fastfood_image']} width=50 height=50 /></td>";
		  echo "</tr>";
		  } echo "</table>";
		  ?>
          
          
          </td>
         
         
           <td valign="top">
    <h2>admin</h2>
   <?php
	include "adminmenu.php"; 
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
