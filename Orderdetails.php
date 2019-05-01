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
				$q="select * from fastfood_order where order_id=$_GET[order_id]";
				$a=$db->fetch_all_array($q);
				foreach($a as $k=>$v)
				{
				echo  "<li>r_id:- {$v['r_id']}"."{$v['r_id']}</li>";
				//echo "<li>fastfood_id:-  {$v['fastfood_id']}</li>";
				//echo "<li>quantity:-  {$v['quantity']}</li>";
				echo "<li>date:-  {$v['date']}</li>";
				echo "<li>total_amount:-  {$v['total_amount']}</li>";
				echo "<li>mobileno.:-  {$v['mobileno.']}</li>";
				echo "<li>delievery_add:-  {$v['delievery_add']}</li>";
				echo "<li>city:-  {$v['city']}</li>";
				echo "<li>pincode:-  {$v['pincode']}</li>";
				echo "<li>status:-  {$v['status']}</li>";
				echo"<li>latitude:- {$v['gps_latitude']}</li>";
				echo"<li>logitude:-{$v['gps_logitude']}</li>";

			
?>
    <script src="http://maps.google.com/maps/api/js?sensor=false">
        </script>
        <script>
            if (navigator.geolocation)
            {
                navigator.geolocation.getCurrentPosition(showCurrentLocation);
            }
            else
            {
               alert("Geolocation API not supported.");
            }

            function showCurrentLocation(position)
            {
                var latitude = <?php echo $v['gps_latitude'];?>;
                var longitude = <?php echo $v['gps_logitude'];?>;
                var coords = new google.maps.LatLng(latitude, longitude);

                var mapOptions = {
                zoom: 15,
                center: coords,
                mapTypeControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            //create the map, and place it in the HTML map div
            map = new google.maps.Map(
            document.getElementById("mapPlaceholder"), mapOptions
            );

            //place the initial marker
            var marker = new google.maps.Marker({
            position: coords,
            map: map,
            title: "Current location!"
            });
            }
        </script>


<?php
								}
				?>
                <a href="Dispatch.php?pid=<?php echo $_GET['order_id'];?>" class="formtitle">Dispatch</a>

<div id="mapPlaceholder">

    </div>               
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
