<?php
session_start();

//Se recoge id del usuario activo e id del trayecto seleccionado para gestionar la peticion
$id_trayecto = filter_input(INPUT_POST, 'id_trayecto');
$id_usuario = $_SESSION['id'];

require_once '../modelo/modelo_trayectos.php';
$cont = new modelo_trayecto();
$cont->insertar_enviar_trayecto($id_trayecto, $id_usuario);
echo '<script>alert("La petición se ha enviado correctamente.");</script>';
?>
<meta http-equiv=Refresh content="0; URL=../vista/menu_principal/menu_principal.php">.
