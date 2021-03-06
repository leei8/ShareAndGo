<form role="form" name="form_registro" method="POST" action="../../controlador/controlador_registro.php">
    <div id="registroPopUp" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <label>Datos de cuenta</label>   
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" maxlength="50" onkeypress="return comprobar_arroba(this.value,event)" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="contrasena_registro" placeholder="Contraseña" name="contrasena_registro" maxlength="50" minlength="8" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="contrasena_registro2" placeholder="Confirma tu ontraseña" name="contrasena_registro2" maxlength="50" minlength="8" required>
                    </div>
                    <label>Datos personales</label>  
                    <div class="form-group">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" maxlength="50" onkeypress="return solo_letras(event)" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido" maxlength="50" onkeypress="return solo_letras(event)" required>
                    </div> 
                    <div class="form-group">
                        <input id="municipioid" class="topcoat-combo-input" type="text" list="poo2" name="municipio"  placeholder="Soy de..." maxlength="50" onkeypress="return solo_letras(event)" required>
                        <datalist id="poo2" name="municipio_registro" >
                        </datalist>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="municipioidregistro"  name="municipioid" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="telefono" placeholder="Telefono" name="telefono" maxlength="9" minlength="9" onkeypress="return solo_numeros(event)">
                    </div>
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" placeholder="Fecha de nacimiento" name="fecha" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" onclick="return validar_informacion_registro()">Enviar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</form>
