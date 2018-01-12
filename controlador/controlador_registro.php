<?php 
require_once '../modelo/modelo_registro.php';
$cont=new modelo_registro();
$datos=$cont->registrar();
alert("hola");
$marcas = json_encode($datos);
print $registro;  

