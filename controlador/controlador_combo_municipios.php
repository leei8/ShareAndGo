<?php 
//Se recogen todos los municipios que tengan como id comunidad Pais Vasco, para cargar en los formularios
require_once '../modelo/modelo_municipios.php';
$id_comunidad = 16; //Temporalmente restringido a solo una comunidad
$id_municipio = NULL;
$cont=new modelo_municipios();
$datos=$cont->cargar_municipios($id_comunidad, $id_municipio);

$municipios = json_encode($datos);
print $municipios;  
