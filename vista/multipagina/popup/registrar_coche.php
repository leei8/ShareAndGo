
<div class="modal fade" id="myModalRegistro" role="dialog"> 
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                 <form method="POST" action="#">
            
            <div class="modal-body">
                
                <div class="form-group"> 
                    <input type="text" class="form-control" id="matricula" placeholder="Matricula" required>
                </div> 
                
                  <div class="form-group">
                    <input name="inputName" class="topcoat-combo-input" id="marca_vehiculo" type="text" list="marca" placeholder="Marca" required>
                    <datalist id="marca" name="marca">
                    </datalist>
                </div>
                
                <div class="form-group"> 
                    <select class="form-control" id="sel1" required>
                        <option disabled="" selected="">Tipo de coche</option>
                        <option>Pequeño</option>
                        <option>Mediano</option>
                        <option>Grande</option>
                    </select>    
                </div> 
              
                <div class="form-group"> 
                    <input type="email" class="form-control" id="color" placeholder="Color">
                </div> 
                <div class="form-group"> 
                    <input type="text" class="form-control" id="plazas" placeholder="Plazas disponibles" required>
                </div>
            </div>
            <div class="modal-footer"> 
                <button type="submit" class="btn btn-default" data-dismiss="modal" id="registrar_vehiculo">Enviar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
            </div> 
                              </form>
                </div>
                    
        </div>
    </div>
</div>
    
       