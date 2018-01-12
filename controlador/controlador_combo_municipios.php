<?php 
require_once '../modelo/modelo_municipios.php';
$id_comunidad = 16;
$id_municipio = NULL;
$cont=new modelo_municipios();
$datos=$cont->cargar_municipios($id_comunidad, $id_municipio);

$municipios = json_encode($datos);
print $municipios;  
