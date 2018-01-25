<?php 
require_once '../modelo/modelo_vehiculos.php';
$cont=new modelo_vehiculos();
$datos=$cont->mostrar_marcas();

$marcas = json_encode($datos);
print $marcas;  

