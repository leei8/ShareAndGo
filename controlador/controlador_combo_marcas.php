<?php 
require_once '../modelo/modelo_marcas_coches.php';
$cont=new modelo_marcas();
$datos=$cont->mostrar_marcas();

$marcas = json_encode($datos);
print $marcas;  

