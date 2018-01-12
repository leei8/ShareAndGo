<div class="modal fade" id="myModalRegistro" role="dialog"> 
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
            </div>
            <div class="modal-body">
                <label for="usr">Matricula:</label> 
                <input type="text" class="form-control" id="matricula">


                <label for="sel1">Tipo:</label>
                <select class="form-control" id="sel1">
                    <option disabled="" selected="">Selecciona tipo de coche</option>
                    <option>Pequeño</option>
                    <option>Mediano</option>
                    <option>Grande</option>
                </select>
                <label for="sel1">Marca:</label>     
                    <input class="topcoat-combo-input" type="text" list="marca" placeholder="Escoge tu marca de coche">
                    <datalist id="marca" name="marca">
                    </datalist>
                <label for="usr">Color:</label> 
                <input type="email" class="form-control" id="color">
                <label for="usr">Nº plazas:</label> 
                <input type="text" class="form-control" id="plazas">
            </div>
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
            </div>
        </div>
    </div>
</div>

