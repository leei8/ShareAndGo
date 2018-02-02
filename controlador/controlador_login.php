<?php
session_start();

require_once '../modelo/modelo_usuario.php';
//Se recogen los datos del formulario de inicio de sesión
$emailUsuario = filter_input(INPUT_POST, 'email');
$contrasena = filter_input(INPUT_POST, 'contrasena');

$cont = new modelo_usuario();
//Se comprueba en la BBDD si existe ese usuario (con la contraseña encriptada)
$comprobacion_encrip = $cont->comprobar_login_encriptado($emailUsuario, $contrasena);
$datos = $cont->recoger_datos_usuario($emailUsuario);

if ($comprobacion_encrip != null) {
    //Si la comprobación devuelve una línea, se recogen los datos del usuario y se cargan en la sesión.

    $_SESSION['loggedin'] = true;
    $_SESSION['id'] = $datos['id_usuario'];
    $_SESSION['email'] = $datos['email'];
    $_SESSION['nombre'] = $datos['nombre'];
    $_SESSION['apellido'] = $datos['apellido'];
    $_SESSION['fecha_nacimiento'] = $datos['fecha_nacimiento'];
    $_SESSION['movil'] = $datos['movil'];
    $_SESSION['municipio'] = $datos['municipio'];
    $_SESSION['id_municipio'] = $datos['id_municipio'];
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60); //La sesión expirará en este periodo de tiempo
 
    header('location: ../vista/menu_principal/menu_principal.php');
} else {
    //Si no devuelve una línea, aviso de datos incorrectos
    echo '<script>alert ("No encontramos ningún usuario con estos datos.\nPor favor, vuelva a intentarlo.");</script>';
}
?>
<meta http-equiv=Refresh content="0; URL=../vista/login/login.php">