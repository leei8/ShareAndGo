<?php
session_start();
require_once '../modelo/modelo_trayectos.php';

//Se recogen los trayectos que el usuario ha creado
$id_usuario = $_SESSION['id'];

$cont = new modelo_trayecto();
$datos = $cont->seleccionar_trayectos_creados_usuario($id_usuario);
$trayectos_creados = json_encode($datos);
print $trayectos_creados;


