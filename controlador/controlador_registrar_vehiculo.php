<?php
session_start();
require_once '../modelo/modelo_vehiculos.php';

//Registro de vehículo, se recogen datos del formulario
$id_usuario = $_SESSION['id'];
$matricula = filter_input(INPUT_POST, 'matricula');
$marca = filter_input(INPUT_POST, 'marca');
$tipo = filter_input(INPUT_POST, 'tipo');
$plazas = filter_input(INPUT_POST, 'plazas');
$color = filter_input(INPUT_POST, 'color');
$cont = new modelo_vehiculos();

$cont->registrar_vehiculo($id_usuario, $matricula, $tipo, $marca, $color, $plazas);

header('Location: ../vista/mi_perfil/mi_perfil.php');