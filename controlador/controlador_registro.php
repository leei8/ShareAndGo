<?php 
require_once '../modelo/modelo_registro.php';

$emailUsuario = filter_input(INPUT_POST,'email');
$contrasenaUsuario = filter_input(INPUT_POST,'contrasena');
$options= ['cost'=>12];
$passwordEncripted= password_hash($password, PASSWORD_BCRYPT,$options);
$nombreUsuario = filter_input(INPUT_POST,'nombre');
$apellidoUsuario = filter_input(INPUT_POST,'apellido');
$municipioregistro= filter_input(INPUT_POST,'municipioid');
$telefonoUsuario = filter_input(INPUT_POST,'telefono');
$fechaUsuario = filter_input(INPUT_POST,'fecha');
$cont=new modelo_registro();

$datos=$cont->registrar($emailUsuario,$passwordEncripted,$nombreUsuario,$apellidoUsuario,$fechaUsuario,$telefonoUsuario,$municipioregistro);

header("location: ../vista/login/login.php");


