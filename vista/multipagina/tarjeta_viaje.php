<div class="tarjetaViaje" ng-repeat="item in listaTrayectos">
    <div id="floating-panel" style="display: none">
    <select id="mode" >
      <option value="DRIVING">Driving</option>
    </select>
    </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: {lat: 37.77, lng: -122.447}
        });
        directionsDisplay.setMap(map);

        calculateAndDisplayRoute(directionsService, directionsDisplay);
        document.getElementById('mode').addEventListener('change', function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var selectedMode = document.getElementById('mode').value;
        directionsService.route({
          origin: {lat:43.3117, lng:-2.63861},  // Haight.
          destination: {lat:43.2261038, lng:-2.7126284},  // Ocean Beach.
          // Note that Javascript allows us to access the constant
          // using square brackets and a string value as its
          // "property."
          travelMode: google.maps.TravelMode[selectedMode]
        }, function(response, status) {
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
    <!--    <button type="button" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-envelope"></span> Enviar solicitud 
        </button>-->
</div>