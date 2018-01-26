<?php
session_start();
require_once '../modelo/modelo_usuario.php';
$emailUsuario = filter_input(INPUT_POST, 'email');
$contrasena = filter_input(INPUT_POST, 'contrasena');

$cont = new modelo_usuario();

$comprobacion_encrip = $cont->comprobar_login_encriptado($emailUsuario, $contrasena);
$datos = $cont->recoger_datos_usuario($emailUsuario);
if ($comprobacion_encrip != null) {

    //Se recogen los datos del usuario logueado y se meten en sesión.Iniciar sesión y el tiempo de este.

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
    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
 
    header('location: ../vista/menu_principal/menu_principal.php');
} else {
    echo '<script>alert ("Usuario o contraseña incorrectos");</script>';
}
?>
<meta http-equiv=Refresh content="0; URL=../vista/login/login.php">.