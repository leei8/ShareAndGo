<?php
session_start();

//Se cargan los vehiculos que sean del usuario de la sesión
require_once '../modelo/modelo_trayectos.php';

$id_usuario = $_SESSION['id'];

$cont = new modelo_trayecto();
$datos = $cont->seleccionar_coches_usuario($id_usuario);
$coches = json_encode($datos);
print $coches;
