<div ng-repeat="item in listaTrayectos">
    <div class="w3-container" style="float: left;width:50%;">
        <div class="w3-card-4">
            <header class="w3-container w3-light-grey">
                <h3>{{item.conductor}}</h3>
                {{item.municipios}} - Amorebieta
                <a target="_blank" href="../multipagina/popup/mapa_viaje.php?latitud={{item.latitud}}&longitud={{item.longitud}}" onClick="window.open(this.href, this.target, 'width=350,height=420'); return false;">
                    
                    <span class="glyphicon glyphicon-map-marker"></span>
                </a>
            </header>
            <div class="w3-container">
            </div>
            <div class="w3-container">
                <tipoViaje ng-class="{'tipoNoSeleccionado' : item.ocasional == '0' , 'tipoSeleccionado' : item.ocasional == '1'}">ocasional</tipoviaje>
                <tipoViaje ng-class="{'tipoNoSeleccionado' : item.ocasional == '1' , 'tipoSeleccionado' : item.ocasional == '0'}">frecuente</tipoviaje>
                <table class="dias">
                    <tr>
                        <td><div ng-class="{'diaSeleccionado' : item.dias == 'Lunes','dia':item.dias != 'Lunes'}">L</div></td>
                        <td><div ng-class="{'diaSeleccionado' : item.dias == 'Martes','dia':item.dias != 'Martes'}">M</div></td>
                        <td><div ng-class="{'diaSeleccionado' : item.dias == 'Miercoles','dia':item.dias != 'Miercoles'}">X</div></td>
                        <td><div ng-class="{'diaSeleccionado' : item.dias == 'Jueves','dia':item.dias != 'Jueves'}">J</div></td>
                        <td><div ng-class="{'diaSeleccionado' : item.dias == 'Viernes','dia':item.dias != 'Viernes'}">V</div></td>
                    </tr>   
                </table>

                Numero de plazas: <numero id="numeroPlazas" class="plazas">{{item.plazas_disponibles}}</numero>

            </div>
            <button class="w3-button w3-block w3-dark-grey">+ Enviar petición</button>
        </div>
    </div>
</div>

<!--
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
</div>-->