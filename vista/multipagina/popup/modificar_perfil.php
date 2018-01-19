
<div class="modal fade" id="modificarPerfil" role="dialog"> 
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <form method="POST" action="../../controlador/controlador_modificar_usuario.php">
                <label>Modificar datos personales:</label>
                 
                 <div class="form-group"> 
                     <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_SESSION['nombre']; ?>">
                 </div>
                 <div class="form-group">
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $_SESSION['apellido']; ?>">
                </div>
                 <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
                </div>
                 <div class="form-group">
                     <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $_SESSION['fecha_nacimiento']; ?>">
                </div>
                
                 <div class="form-group">
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $_SESSION['movil']; ?>">
                 </div>
                    <div class="form-group">
                        <input id="municipiomodif"  class="topcoat-combo-input form-control" type="text" list="poo1" name="municipio"  value="<?php echo $_SESSION['municipio']; ?>">
                        <datalist id="poo1" name="municipio_modificar" >
                        </datalist>
                    </div>
                    <div class="form-group">
                        <input id="municipiomodif_id"  class="form-control" type="text" name="municipio_id"  value="<?php echo $_SESSION['id_municipio']; ?>">
                    </div>
                 <label>Modificar contraseña:</label>
                   <div class="form-group">
                <input type="password" class="form-control" id="contrasena" placeholder="Nueva contraseña">
                 </div>
                <div class="form-group">
                <input type="password" class="form-control" id="contrasena" placeholder="Repetir nueva contraseña">
                 </div>
                
                <div class="modal-footer"> 
                    <input type="submit" class="btn btn-default" value='Enviar'>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
                </div>
                 </form>
            </div>
        </div>
    </div>
</div>
