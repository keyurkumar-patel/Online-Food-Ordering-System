<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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
                var latitude = <?php echo $lat; ?> ;
                var longitude = <?php echo $ln; ?> ;
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
    </head>
    <style>
    #mapPlaceholder {
        height: 400px;
        width: 700px;
    </style>

<body>
<div id="mapPlaceholder">

    </div>               

</body>
</html>
