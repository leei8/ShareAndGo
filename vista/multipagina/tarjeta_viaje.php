<div ng-repeat="item in listaTrayectos |filter:{municipios:TEXTOBusqueda,dias:buscarDia}">
    <div class="w3-container" style="float: left;width:50%;">
        <div class="w3-card-4">
           <header class="w3-container w3-light-grey">
               <h3>{{item.municipios}} - Amorebieta <a target="_blank" href="../multipagina/popup/mapa_viaje.php?latitud={{item.latitud}}&longitud={{item.longitud}}" onClick="window.open(this.href, this.target, 'width=350,height=420'); return false;" data-toggle="tooltip" data-placement="right" title="Ver en mapa"><span class="glyphicon glyphicon-map-marker"></span></a></h3>
                {{item.conductor}}
                
            </header>
            <div class="w3-container">
            </div>
            <div class="w3-container">
                <tipoViaje ng-class="{'tipoNoSeleccionado' : item.ocasional == '0' , 'tipoSeleccionado' : item.ocasional == '1'}">ocasional</tipoviaje>
                <tipoViaje ng-class="{'tipoNoSeleccionado' : item.ocasional == '1' , 'tipoSeleccionado' : item.ocasional == '0'}">frecuente</tipoviaje>
                <table class="dias">
                    <tr>
                        <td><div ng-class="{'diaSeleccionado' : item.dias.includes('Lunes'),'dia':item.dias != 'Lunes'}">L</div></td>
                        <td><div ng-class="{'diaSeleccionado' : item.dias.includes('Martes'),'dia':item.dias != 'Martes'}">M</div></td>
                        <td><div ng-class="{'diaSeleccionado' : item.dias.includes('Miercoles'),'dia':item.dias != 'Miercoles'}">X</div></td>
                        <td><div ng-class="{'diaSeleccionado' : item.dias.includes('Jueves'),'dia':item.dias != 'Jueves'}">J</div></td>
                        <td><div ng-class="{'diaSeleccionado' : item.dias.includes('Viernes'),'dia':item.dias != 'Viernes'}">V</div></td>
                    </tr>   
                </table>
                Numero de plazas: <numero id="numeroPlazas" class="plazas">{{item.plazas_disponibles}}</numero>

            </div>
            <div ng-class="{'sin_plazas' : item.plazas_disponibles === '0'}">
                <form action="../../controlador/controlador_enviar_peticion.php" method="POST">
                    <input type="text" id="id_trayecto" name="id_trayecto" value="{{item.id_trayecto}}" hidden="">
                    <input name="boton" type="submit" class="w3-button w3-block w3-dark-grey" value="+ Enviar petición">
                </form>
            </div>
        </div>
    </div>
</div>
