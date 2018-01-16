<div class="modal fade" id="myModalRegistro" role="dialog"> 
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
            </div>
            <form action="../../controlador/controlador_registrar_vehiculo.php" method="POST">
                <div class="modal-body">

                    <div class="form-group"> 
                        <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matricula">
                    </div> 

                    <div class="form-group">
                        <input class="topcoat-combo-input" type="text" list="marca" placeholder="Marca" name="marca_seleccionada">
                        <datalist id="marca" name="marca">
                        </datalist>
                    </div>

                    <div class="form-group"> 
                        <select class="form-control" id="sel1" name="tipo">
                            <option disabled="" selected="">Tipo de coche</option>
                            <option value="pequeño">Pequeño</option>
                            <option value="mediano">Mediano</option>
                            <option value="grande">Grande</option>
                        </select>    
                    </div> 

                    <div class="form-group"> 
                        <input type="text" class="form-control" id="color" name="color" placeholder="Color">
                    </div> 
                    <div class="form-group"> 
                        <input type="text" class="form-control" id="plazas" name="plazas" placeholder="Plazas disponibles">
                    </div>
                </div>
                <div class="modal-footer"> 
                    <input type="submit" class="btn btn-default" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
                </div>
            </form>
        </div>
    </div>
</div>

