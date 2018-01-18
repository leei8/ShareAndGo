<?php
session_start();
require_once '../modelo/modelo_usuario.php';

$id_usuario = $_SESSION['id'];
$nombre = filter_input(INPUT_POST,'nombre');
$apellido = filter_input(INPUT_POST,'apellido');
$email = filter_input(INPUT_POST,'email');
$fecha_nacimiento = filter_input(INPUT_POST,'fecha_nacimiento');
$telefono = filter_input(INPUT_POST,'telefono');
$municipio= filter_input(INPUT_POST,'municipio');

$cont = new modelo_usuario();
$cont->modificar_usuario_por_id($id_usuario,$nombre,$apellido,$email,$telefono,$municipio);

require_once '../vista/mi_perfil/mi_perfil.php';
?>
