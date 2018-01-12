<?php

session_start();
require_once '../modelo/modelo_usuario.php';
$emailUsuario = filter_input($_POST['email']);
$contrasena = filter_input($_POST['contrasena']);



$cont = new modelo_usuario();
$datos = $cont->comprobar_login($emailUsuario, $contrasena);

$id = $datos['id_usuario'];
$email = $datos['email'];
$nombre = $datos['nombre'];
$apellido = $datos['apellido'];
$fechaNacimiento = $datos['fecha_nacimiento'];
$movil = $datos['movil'];
$idMunicipio = $datos['id_municipio'];

if ($datos != null) {
    $_SESSION['loggedin'] = true;
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $email;
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    $_SESSION['fechaNacimiento'] = $fechaNacimiento;
    $_SESSION['movil'] = $movil;
    $_SESSION['idMunicipio'] = $idMunicipio;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);

    header('location: ../vista/menu_principal/menu_principal.php');
} else {
    echo '<script>alert ("Usuario o contraseña incorrectos");</script><meta http-equiv="refresh" content="0; url="../../vista/login/login.php">';
}