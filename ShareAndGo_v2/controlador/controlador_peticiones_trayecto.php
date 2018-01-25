<?php
session_start();
require_once '../modelo/modelo_trayectos.php';

$id_usuario = $_SESSION['id'];



$cont = new modelo_trayecto();
$datos = $cont->seleccionar_peticiones_trayecto_del_usuario($id_usuario);
$peticiones_trayecto_del_usuario = json_encode($datos);
print $peticiones_trayecto_del_usuario;
