<?php

require_once '../controlador/controlador_registro.php';

class modelo_registro {

    private $link;
    private $registro;

    public function __construct() {
        $this->link = Conectar::conexion();
        $this->registro = array();
    }

    public function registrar($p_email,$p_contrasena,$p_nombre,$p_apellido,$p_fecha,$p_movil,$p_id_municipio) {
        $consulta = $this->link->query("CALL sp_insertar_usuario('$p_email','$p_contrasena','$p_nombre','$p_apellido','$p_fecha','$p_movil','$p_id_municipio')");
        while ($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
            $this->registro[] = $row;
        }
        $consulta->free_result();
        $this->link->close();
        return $this->registro;
    }


}
