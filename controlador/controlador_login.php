<?php
session_start();
require_once '../modelo/modelo_usuario.php';
$emailUsuario = filter_input(INPUT_POST, 'email');
$contrasena = filter_input(INPUT_POST, 'contrasena');

$cont = new modelo_usuario();
$datos = $cont->comprobar_login($emailUsuario, $contrasena);

if ($datos != null) {
    $_SESSION['loggedin'] = true;
    $_SESSION['id'] = $datos['id_usuario'];
    $_SESSION['email'] = $datos['email'];
    $_SESSION['nombre'] = $datos['nombre'];
    $_SESSION['apellido'] = $datos['apellido'];
    $_SESSION['fecha_nacimiento'] = strtotime($datos['fecha_nacimiento']);
    $_SESSION['movil'] = $datos['movil'];
    $_SESSION['municipio'] = $datos['municipio'];
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
    
    header('location: ../vista/menu_principal/menu_principal.php');
} else {
    echo '<script>alert ("Usuario o contraseña incorrectos");</script>';
}
?>
<meta http-equiv=Refresh content="0; URL=../vista/login/login.php">.
