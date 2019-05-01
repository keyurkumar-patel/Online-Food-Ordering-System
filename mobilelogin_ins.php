<!DOCTYPE html>
<html>
  <head>
    <title>Transitions Demo</title>
    <meta name="viewport" content="width=device-width, height=device-height,initial-scale=1">
     <link rel="stylesheet" href="jquery.mobile-1.0.1.min.css" /> 
    <script src="jquery-1.6.4.min.js"></script>
    <script src="jquery.mobile-1.0.1.min.js"></script>
    <script src="jquery.validate.min.js"></script>

<script type="text/javascript" >
        function noBack() 
        {
            window.history.forward()
        }
        noBack();
        window.onload = noBack;
        window.onpageshow = function (evt) { if (evt.persisted) noBack(); }
        window.onunload = function () { void (0); }
    </script>

    <script>
	$(function() {
   	$( "#registerForm" ).validate();
	});
</script>
	<style>
	html {height:100%;}
      body {margin:0; padding:0; height:100%;}
		label.error {
				color: red;
				font-size: 16px;
				font-weight: normal;
				line-height: 1.4;
				margin-top: 0.5em;
				width: 100%;
				float: none;
		}

		@media screen and (orientation: portrait){
				label.error { margin-left: 0; display: block; }
		}

		@media screen and (orientation: landscape){
				label.error { display: inline-block; margin-left: 22%; }
		}

		em { color: red; font-weight: bold; padding-right: .25em; }
	</style>
  </head>
  <body>
  <div data-role="header">
	<h1>FASTFOOD SHACK</h1>
 </div>
   <div data-role="content" data-theme="e" >
  <?php
  include "conn.php";
$EmailID=$_POST['emailid'];
$password=$_POST['password'];
$q="select * from registration where emailid='$EmailID' and password='$password'";
$resr=mysql_query($q) or die(mysql_error());
if(mysql_num_rows($resr)>0)
{
$a=$db->fetch_all_array($q);
echo "<table>";
foreach($a as $k=>$v)
{
$_SESSION["r_id"]=$v['r_id'];
$_SESSION['email']=$EmailID;
$_SESSION['lat'] = $_POST['lat'];
$_SESSION['lon'] = $_POST['lon'];

	header("location:mobilehome.php");
}	
}
else
{
	echo "invalid user name or password";
}

?>
 </div>
   <div data-role="footer">
	 <h1>&copy; IT CODES 2013</h1>
 </div>
   </body>
   </html>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   