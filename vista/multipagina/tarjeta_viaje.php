<div class="tarjetaViaje" ng-repeat="item in listaTrayectos">
    <div id="map"></div>
    <div id="right-panel">
        <div style="display: none">
            <b>Waypoints:</b> <br>
            <i>(Ctrl+Click or Cmd+Click for multiple selection)</i> <br>
            <select multiple id="waypoints">
            </select>
        </div>
    </div>
    <div id="map"></div>
    <div id="right-panel">
        <div style="display: none">
            <b>Waypoints:</b> <br>
            <i>(Ctrl+Click or Cmd+Click for multiple selection)</i> <br>
            <select multiple id="waypoints">
            </select>
        </div>
    </div>
    <script>
            $(document).ready(function () {

            
            function initMap() {
                var directionsService = new google.maps.DirectionsService;
                var directionsDisplay = new google.maps.DirectionsRenderer;
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 6,
                    center: {lat: 41.85, lng: -87.65}

                });
                directionsDisplay.setMap(map);

                calculateAndDisplayRoute(directionsService, directionsDisplay);

            }

            function calculateAndDisplayRoute(directionsService, directionsDisplay) {
                var waypts = [];
                var checkboxArray = document.getElementById('waypoints');
                for (var i = 0; i < checkboxArray.length; i++) {
                    if (checkboxArray.options[i].selected) {
                        waypts.push({
                            location: checkboxArray[i].value,
                            stopover: true
                        });
                    }
                }

                directionsService.route({
                    origin: '43.3117, -2.63861',
                    destination: '43.2261038, -2.7126284',
                    waypoints: waypts,
                    optimizeWaypoints: true,
                    travelMode: 'DRIVING'
                }, function (response, status) {
                    if (status === 'OK') {
                        directionsDisplay.setDirections(response);
                        var route = response.routes[0];
                        var summaryPanel = document.getElementById('directions-panel');
                        summaryPanel.innerHTML = '';
                        // For each route, display summary information.
                        for (var i = 0; i < route.legs.length; i++) {
                            var routeSegment = i + 1;
                            summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
                                    '</b><br>';
                            summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
                            summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
                            summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
                        }
                    } else {
                        window.alert('Directions request failed due to ' + status);
                    }
                });
            }
});
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABD69hTgu54mNQzwPoDLawwab2IGcNZ0w&callback=initMap">
    </script>
    <div id="nombreConductor" >
        <nombreConductor class="nombreExperiencia">
            <nombre class="nombre">{{item.conductor}}</nombre>
            <img src="../img/icono_volante.png" class="iconoVolante">
            <img src="../img/icono_volante.png" class="iconoVolante">
            <img src="../img/icono_volante.png" class="iconoVolante">
            <img src="../img/icono_volante.png" class="iconoVolante">
            <img src="../img/icono_volante.png" class="iconoVolante">
        </nombreConductor>
    </div>
    <div id="informacion" class="informacion">
        <div id="tipo_trayecto" class="tipoTrayecto" >
            <tipoViaje ng-class="{'tipoNoSeleccionado' : item.ocasional == '0' , 'tipoSeleccionado' : item.ocasional == '1'}">ocasional</tipoviaje>
            <tipoViaje ng-class="{'tipoNoSeleccionado' : item.ocasional == '1' , 'tipoSeleccionado' : item.ocasional == '0'}">frecuente</tipoviaje>
        </div>
        <table class="dias">
            <tr>
                <td><div ng-class="{'diaSeleccionado' : item.dias == 'Lunes','dia':item.dias != 'Lunes'}">L</div></td>
                <td><div ng-class="{'diaSeleccionado' : item.dias == 'Martes','dia':item.dias != 'Martes'}">M</div></td>
                <td><div ng-class="{'diaSeleccionado' : item.dias == 'Miercoles','dia':item.dias != 'Miercoles'}">X</div></td>
                <td><div ng-class="{'diaSeleccionado' : item.dias == 'Jueves','dia':item.dias != 'Jueves'}">J</div></td>
                <td><div ng-class="{'diaSeleccionado' : item.dias == 'Viernes','dia':item.dias != 'Viernes'}">V</div></td>
            </tr>   
        </table>
    </div>
    <div id="informacion" class="informacion">
        <div id="plazas_disponibles" class="zonaPlazas">
            Numero de plazas: <numero id="numeroPlazas" class="plazas">{{item.plazas_disponibles}}</numero>
        </div>
    </div>
    <button type="button" class="btn btn-default btn-sm">
        <span class="glyphicon glyphicon-envelope"></span> Enviar solicitud 
    </button>
</div>