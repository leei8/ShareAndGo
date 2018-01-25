<?php
session_start();
require_once '../modelo/modelo_trayectos.php';

$id_usuario = $_SESSION['id'];

$cont = new modelo_trayecto();
$datos = $cont->seleccionar_coches_usuario($id_usuario);
$coches = json_encode($datos);
print $coches;
