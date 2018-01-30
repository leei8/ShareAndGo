<div class="modal fade" id="modificarPerfil" role="dialog"> 
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <form method="POST" name="form_modificar" action="../../controlador/controlador_modificar_usuario.php" >
                <label>Modificar datos personales:</label>
                 
                 <div class="form-group"> 
                     <input type="text" class="form-control" id="nombre" name="nombre" maxlength="50" value="<?php echo $_SESSION['nombre']; ?>" required onkeypress="return solo_letras(event)">
                 </div>
                 <div class="form-group">
                <input type="text" class="form-control" id="apellido" name="apellido" maxlength="50" value="<?php echo $_SESSION['apellido']; ?>" required onkeypress="return solo_letras(event)">
                </div>
                 <div class="form-group">
                     <input type="email" class="form-control" id="email" name="email" maxlength="50" value="<?php echo $_SESSION['email']; ?>" required onkeypress="return comprobar_arroba(this.value,event)">
                </div>
                 <div class="form-group">
                     <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $_SESSION['fecha_nacimiento']; ?>" required>
                        <!--<span id="escondido" style="display:none"></span>-->
                 </div>
                
                 <div class="form-group">
                     <input type="text" class="form-control" id="telefono" name="telefono" maxlength="9" minlength="9" value="<?php echo $_SESSION['movil']; ?>" required onkeypress="return solo_numeros(event)">
                 </div>
                    <div class="form-group">
                        <input id="municipiomodif"  class="topcoat-combo-input form-control" type="text" list="poo1" name="municipio" maxlength="50" value="<?php echo $_SESSION['municipio']; ?>" required>
                        <datalist id="poo1" name="municipio_modificar" >
                        </datalist>
                    </div>
                    <div class="form-group">
                        <input type='hidden' id="municipiomodif_id"  class="form-control" type="text" name="municipio_id"  value="<?php echo $_SESSION['id_municipio']; ?>" required>
                    </div>
                 <label>Modificar contraseña:</label>
                   <div class="form-group">
                       <input type="password" class="form-control" id="contrasena_modificar" name="contrasena" maxlength="50" minlength="8" placeholder="Nueva contraseña" value="">
                 </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="contrasena_modificar2" maxlength="50" minlength="8" placeholder="Repetir nueva contraseña" value="">
                 </div>
                
                <div class="modal-footer"> 
                    <input type="submit" class="btn btn-default" value='Enviar' onclick="return validar_informacion_modificar()">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
                </div>
                 </form>
            </div>
        </div>
    </div>
</div>