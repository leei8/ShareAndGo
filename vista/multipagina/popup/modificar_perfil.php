
<div class="modal fade" id="modificarPerfil" role="dialog"> 
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <label>Modificar datos personales:</label>
                 <div class="form-group"> 
                     <input type="text" class="form-control" id="nombre" value="<?php echo $_SESSION['nombre']; ?>">
                 </div>
                 <div class="form-group">
                <input type="text" class="form-control" id="apellido" value="<?php echo $_SESSION['apellido']; ?>">
                </div>
                 <div class="form-group">
                <input type="email" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>">
                </div>
                 <div class="form-group">
                     <input type="text" class="form-control" id="fecha_nacimiento" value="<?php echo date('d/m/Y', $_SESSION['fecha_nacimiento']); ?>">
                </div>
                
                 <div class="form-group">
                <input type="text" class="form-control" id="telefono" value="<?php echo $_SESSION['movil']; ?>">
                 </div>
                 <div class="form-group">
                <input type="text" class="form-control" id="municipio" value="<?php echo $_SESSION['municipio']; ?>">
                </div>
                 <label>Modificar contraseña:</label>
                   <div class="form-group">
                <input type="password" class="form-control" id="contrasena" placeholder="Nueva contraseña">
                 </div>
                <div class="form-group">
                <input type="password" class="form-control" id="contrasena" placeholder="Repetir nueva contraseña">
                 </div>
                
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
                </div>
            </div>
        </div>
    </div>
</div>
