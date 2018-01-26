<div class="modal fade" id="publicarViajePopUp" role="dialog"> 
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">Publicar trayecto</h4>
            </div> 
            <div class="modal-body"> 
                <div class="form-group">
                    <input class="topcoat-combo-input" type="text" list="poo1" placeholder="Salgo de..." id="municipio_salida">
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

                            <input class="topcoat-combo-input" type="text" list="poo1" placeholder="Paso por..." id="municipio_parada" name="parada">
                            <datalist id="poo1" name="municipio_paso">
                            </datalist>
                            <div class="input-group-btn"> 
                                <button class="btn btn-danger remove" type="button" id="borrar_parada"><i class="glyphicon glyphicon-remove"></i> Borrar</button>
                            </div>

                        </div>
                    </div>
                </div>

                <input class="topcoat-combo-input" type="text" list="poo3" placeholder="Elige el coche que vayas a utilizar" id="elegir_coche">
                <datalist id="poo3" name="datalist_coche">
                </datalist>

                <br>

                <div class="panel-default">
                    <label>Nº plazas disponibles:</label><br> 
                    <input type="text" class="form-control" id="plazasdipo">
                    
                     <input type="hidden" id="fecha_actual"/>
                    
                    <label class="radio-inline">
                        <input type="radio" name="Tipo" value=1>Ocasional
                    </label><br />
                    <label class="radio-inline">
                        <input type="radio" name="Tipo" value=2>Frecuente
                    </label><hr />
                </div>
                <div class="panel-default">
                    <div class="checkbox">
                        <h4>Fecha</h4>
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


