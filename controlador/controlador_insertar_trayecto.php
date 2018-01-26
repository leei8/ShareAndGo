<?php

session_start();
require_once '../modelo/modelo_trayectos.php';

$id_usuario = $_SESSION['id'];
$municipio_salida = filter_input(INPUT_POST, 'municipio_salida');
$paradas = filter_input(INPUT_POST, 'paradas');
$vehiculo_seleccionado = filter_input(INPUT_POST, 'coche');
$plazas_disponibles = filter_input(INPUT_POST, 'plazas_disponibles');
$tipo_trayecto = filter_input(INPUT_POST, 'tipo_trayecto');
$dias_seleccionados = filter_input(INPUT_POST, 'dias_seleccionados');
$fecha_actual = filter_input(INPUT_POST,'fecha_actual');


$fecha_date = strtotime($fecha_actual);

$new_format = date('Y-m-d',$fecha_date);


$cont = new modelo_trayecto();

$cont->insertar_trayecto($vehiculo_seleccionado, $id_usuario, $municipio_salida, $new_format , $plazas_disponibles, $tipo_trayecto,$paradas,$dias_seleccionados);

header('Location: ../vista/mi_perfil/mi_perfil.php');
