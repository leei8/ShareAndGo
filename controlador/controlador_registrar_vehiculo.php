<?php
session_start();
require_once '../modelo/modelo_registrar_vehiculo.php';

$id_usuario = $_SESSION['id'];
$matricula = filter_input(INPUT_POST, 'matricula');
$marca = filter_input(INPUT_POST, 'marca_seleccionada');
$tipo = filter_input(INPUT_POST, 'tipo');
$plazas = filter_input(INPUT_POST, 'plazas');
$color = filter_input(INPUT_POST, 'color');
//echo $id_usuario, $matricula, $marca, $tipo, $plazas, $color;
$cont = new modelo_registro_vehiculo();

$cont->registrar_vehiculo($id_usuario, $matricula, $tipo, $marca, $color, $plazas);

header('Location: ../vista/mi_perfil/mi_perfil.php');