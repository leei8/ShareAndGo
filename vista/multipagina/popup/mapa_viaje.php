<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <title>Travel modes in directions</title>
        <style>
            /* Always set the map height explicitly to define the size of the div
             * element that contains the map. */
            #map {
                height: 100%;
            }
            /* Optional: Makes the sample page fill the window. */
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
            #floating-panel {
                position: absolute;
                top: 10px;
                left: 25%;
                z-index: 5;
                background-color: #fff;
                padding: 5px;
                border: 1px solid #999;
                text-align: center;
                font-family: 'Roboto','sans-serif';
                line-height: 30px;
                padding-left: 10px;
            }
        </style>
    </head>
    <body>

        <div id="floating-panel" style="display: none">
            <select id="mode" >
                <option value="DRIVING">Driving</option>
            </select>
        </div>
        <div id="map"></div>
        <script>
            alert($latitud);
            function initMap() {
                var directionsDisplay = new google.maps.DirectionsRenderer;
                var directionsService = new google.maps.DirectionsService;
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 14,
                    center: {lat: 37.77, lng: -122.447}
                });
                directionsDisplay.setMap(map);

                calculateAndDisplayRoute(directionsService, directionsDisplay);
                document.getElementById('mode').addEventListener('change', function () {
                    calculateAndDisplayRoute(directionsService, directionsDisplay);
                });
            }
<?php
$latitud = $_GET['latitud'];
$longitud = $_GET['longitud'];
?>
            function calculateAndDisplayRoute(directionsService, directionsDisplay) {
                var selectedMode = document.getElementById('mode').value;
                directionsService.route({
                    origin: {lat: <?php echo $latitud; ?>, lng: <?php echo $longitud; ?>}, // Haight.
                    destination: {lat: 43.2225403, lng: -2.7249993}, // Ocean Beach.
                    // Note that Javascript allows us to access the constant
                    // using square brackets and a string value as its
                    // "property."
                    travelMode: google.maps.TravelMode[selectedMode]
                }, function (response, status) {
                    if (status == 'OK') {
                        directionsDisplay.setDirections(response);
                    } else {
                        window.alert('Directions request failed due to ' + status);
                    }
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCGCpliYNEoTkYS2Zf3hfjvfoEpo3bjNk&callback=initMap">
        </script>
    </body>
</html>