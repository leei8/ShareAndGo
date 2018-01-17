<?php
require_once '../controlador/conector/conector.php';

class modelo_registro_vehiculo {
    private $link;
    
    public function __construct() {
        $this->link = Conectar::conexion();
    }

    public function registrar_vehiculo($id_usuario, $matricula, $tipo, $marca, $color, $numero_plazas) {
        $this->link->query("CALL sp_registrar_vehiculo($id_usuario, '$matricula', '$tipo', $marca, '$color', $numero_plazas)");
    }
}