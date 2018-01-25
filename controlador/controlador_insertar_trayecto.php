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


$cont = new modelo_trayecto();

$cont->insertar_trayecto($id_usuario, $municipio_salida, $vehiculo_seleccionado, $plazas_disponibles, $tipo_trayecto);

//header('Location: ../vista/mi_perfil/mi_perfil.php');
