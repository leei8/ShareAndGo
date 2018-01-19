<?php
session_start();
require_once '../modelo/modelo_usuario.php';

$id_usuario = $_SESSION['id'];
$nombre = filter_input(INPUT_POST,'nombre');
$apellido = filter_input(INPUT_POST,'apellido');
$email = filter_input(INPUT_POST,'email');

//$fecha = (filter_input(INPUT_POST,'fecha_nacimiento'));
//$formateando_fecha = DateTime::createFromFormat('d-m-Y',$fecha);
//$fecha_nacimiento = $formateando_fecha->date_format('Y-m-d');

//$fecha_nacimiento = date_format($fecha_inicio,"Y-m-d");
//$fecha_nacimiento = date_format($fecha_nacimiento_inicial, 'Y-m-d');
//$fecha_nacimiento = date_format($date, 'Y-m-d');


$telefono = filter_input(INPUT_POST,'telefono');
$id_municipio= filter_input(INPUT_POST,'municipio_id');

echo $id_usuario;
echo $nombre;
echo $apellido;
echo $email;
echo $fecha_inicio;
echo $fecha_nacimiento;
echo $telefono;
echo $id_municipio;


$cont = new modelo_usuario();
$cont->modificar_usuario_por_id($id_usuario,$nombre,$apellido,$email,$telefono,$id_municipio,$fecha_nacimiento);
//require_once '../vista/mi_perfil/mi_perfil.php';
?>
