<div class="modal fade" id="publicarViajePopUp" role="dialog"> 
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">Publicar trayecto</h4>
            </div> 
            <div class="modal-body"> 
                <div class="form-group">
                    <input class="topcoat-combo-input" type="text" list="poo1" placeholder="Salgo de..." maxlength="50" id="municipio_salida" required>
                    <datalist id="poo1" name="municipio_salida" >
                    </datalist>

                    <br><br>
                    <div class="input-group control-group after-add-more">
                        <div class="input-group-btn"> 
                            <button class="btn btn-primary add-more" id="anadirParada" type="button"><i class="glyphicon glyphicon-plus"></i> Añadir Parada</button>
                        </div>
                    </div>
                    <!-- Copy Fields-These are the fields which we get through jquery and then add after the above input,-->
                    
                    <div class="copy-fields hide">
                        <div class="control-group input-group" style="margin-top:10px">

                            <input class="topcoat-combo-input" type="text" list="poo1" placeholder="Paso por..." maxlength="50" id="municipio_parada" name="parada">
                            <datalist id="poo1" name="municipio_paso">
                            </datalist>
                            <div class="input-group-btn"> 
                                <button class="btn btn-danger remove" type="button" id="borrar_parada"><i class="glyphicon glyphicon-remove"></i> Borrar</button>
                            </div>

                        </div>
                    </div>
                </div>

                <input class="topcoat-combo-input" type="text" list="poo3" placeholder="Elige el vehículo a utilizar" id="elegir_coche" required>
                <datalist id="poo3" name="datalist_coche">
                </datalist>

                <br>
                <br>

                <div class="panel-default">
                    <div>
                    <input type="text" class="form-control" id="plazasdipo" maxlength="1" placeholder="Nº de plazas disponibles" required>
                    </div>
                     <input type="hidden" id="fecha_actual"/>
                </div>
                <div class="panel-default">
                    <h5>Tipo de trayecto:</h5>
                    <label class="radio-inline">
                        <input type="radio" name="Tipo" value=1>Ocasional
                    </label><br/>
                    <label class="radio-inline">
                        <input type="radio" name="Tipo" value=0>Frecuente
                    </label><br/>
                    <div class="checkbox" >
                        <h5>Elige los días:</h5>
                        <label><input type="checkbox" id="lunes" value="Lunes" class="check" name="dias">Lunes</label>
                        <label><input type="checkbox" id="martes" value="Martes" class="check" name="dias">Martes</label>
                        <label><input type="checkbox" id="miercoles" value="Miercoles" class="check" name="dias">Miercoles</label>
                        <label><input type="checkbox" id="jueves" value="Jueves" class="check" name="dias">Jueves</label>
                        <label><input type="checkbox" id="viernes" value="Viernes" class="check" name="dias">Viernes</label>
                    </div> 
                    <div class="checkbox ">
                        <label><input type="checkbox" value="" id="seleccionartodos">Todos los anteriores</label>
                    </div>
                </div>    
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="insertar_trayecto">Enviar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
                </div> 
            </div> 
        </div> 
    </div>
</div>


