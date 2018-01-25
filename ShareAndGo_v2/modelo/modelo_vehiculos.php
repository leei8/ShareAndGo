<?php
require_once '../controlador/conector/conector.php';

class modelo_vehiculos {
    private $link;
    
    public function __construct() {
        $this->link = Conectar::conexion();
    }

    
     public function mostrar_marcas(){
        $consulta=$this->link->query("CALL sp_mostrar_marcas_vehiculos()");
        while($filas=$consulta->fetch_assoc()){
            $this->marcas[]=$filas;
        }
        return $this->marcas;
    }

    public function registrar_vehiculo($id_usuario, $matricula, $tipo, $marca, $color, $numero_plazas) {
        $this->link->query("CALL sp_registrar_vehiculo($id_usuario, '$matricula', '$tipo', $marca, '$color', $numero_plazas)");
    }
}