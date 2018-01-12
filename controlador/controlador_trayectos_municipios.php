<?php

require_once '../modelo/modelo_trayectos.php';

$cont = new modelo_trayecto();

$datos = $cont->mostrar_todos_trayectos();

$trayecto = json_encode($datos);

print $trayecto;
