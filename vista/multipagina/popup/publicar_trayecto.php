<div class="modal fade" id="publicarViajePopUp" role="dialog"> 
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">Publicar trayecto</h4>
            </div> 
            <div class="modal-body"> 
                <div class="form-group">
                    <input class="topcoat-combo-input" type="text" list="poo" placeholder="Salgo de...">
                    <datalist id="poo" name="municipio_salida">
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

                            <input type="text" name="addmore[]" id="municipio_paso" class="form-control topcoat-combo-input" placeholder="Paso por...">
                            <div class="input-group-btn"> 
                                <button class="btn btn-danger remove" type="button" id="anadir_parada"><i class="glyphicon glyphicon-remove"></i> Borrar</button>
                            </div>

                        </div>
                    </div>
                </div>

                <input class="topcoat-combo-input" type="text" list="poo" placeholder="Elige el coche que vayas a utilizar">
                    <datalist id="poo" name="coche">
                    </datalist>

                <br>

                <div class="panel-default">
                    <label>Nº plazas disponibles:</label><br> 
                    <input type="text" class="form-control" id="plazasdipo">
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
                        <label><input type="checkbox" value="" class="check">Lunes</label>
                        <label><input type="checkbox" value="" class="check">Martes</label>
                        <label><input type="checkbox" value="" class="check">Miercoles</label>
                        <label><input type="checkbox" value="" class="check">Jueves</label>
                        <label><input type="checkbox" value="" class="check">Viernes</label>
                    </div> 
                    <div class="checkbox ">
                        <label><input type="checkbox" value="" id="seleccionartodos">Todos los anteriores</label>
                    </div>
                </div>    
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
                </div> 
            </div> 
        </div> 
    </div>
</div>
