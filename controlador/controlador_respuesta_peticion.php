<?php

$respuesta = $_GET['respuesta'];
$id_peticion = $_GET['id_peticion'];
$id_trayecto = $_GET['id_trayecto'];

require_once '../modelo/modelo_peticiones.php';
$cont = new modelo_peticiones();

if ($respuesta == 'true') {
    $cont->aceptar_peticion($id_trayecto, $id_peticion);
}else{
    $cont->rechazar_peticion($id_peticion);
}
?>
<meta http-equiv=Refresh content="0; URL=../vista/mi_perfil/mi_perfil.php">.