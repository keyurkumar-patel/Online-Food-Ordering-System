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
    
    <script language=javascript>
        window.onload = function () {
            if (navigator.geolocation) {
                //Get position and assign a handler
                navigator.geolocation.getCurrentPosition(positionHandler);
            }
            else {
                alert("Your browser doesn’t support geolocation.");
            }
        }
        function positionHandler(position) {
            alert("Latitude: " + position.coords.latitude +
          ", Longitude: " + position.coords.longitude);
            document.getElementById('lon').value = position.coords.longitude;
			document.getElementById('lat').value = position.coords.latitude;
alert(document.getElementById('lat').value = position.coords.latitude);

        }

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
  <form action="mobilelogin_ins.php" method="post" id="registerForm">
   <fieldset data-role="fieldcontain">
   <label for="emailid">Email ID</label>
   <input type="text" name="emailid" id="emailid" value="" placeholder="Your Email ID" class="text required email">
   
   </fieldset>
    <fieldset data-role="fieldcontain">
   <label for="password">Password</label>
   <input type="password" name="password" id="password" value="" placeholder="Your Password" class="required">
   <input type="hidden" name="lat" id="lat">
      <input type="hidden" name="lon" id="lon">
   
   </fieldset>

 
<input type="submit" value="Login">
 
</form>
 </div>
   <div data-role="footer">
	 <h1>&copy; IT CODES 2013</h1>
 </div>
   </body>
   </html>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   