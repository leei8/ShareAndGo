<?php
session_start();
require_once '../../modelo/modelo_trayectos.php';

$id_usuario = $_SESSION['id'];

$cont = new modelo_trayecto();
$datos = $cont->seleccionar_trayectos_del_usuario($id_usuario);
$trayectos_compartidos = json_encode($datos);
print $trayectos_compartidos;
