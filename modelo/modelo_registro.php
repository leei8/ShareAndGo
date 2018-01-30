<?php
require_once '../controlador/conector/conector.php';

class modelo_registro {

    private $link;
    

    public function __construct() {
        $this->link = Conectar::conexion();
    
    }

//Se añade un nuevo usuario a la BBDD     
    public function registrar($p_email, $p_contrasena, $p_nombre, $p_apellido, $p_fecha, $p_movil, $p_id_municipio) {
        $consulta = $this->link->query("CALL sp_insertar_usuario('$p_email','$p_contrasena','$p_nombre','$p_apellido','$p_fecha','$p_movil',$p_id_municipio)");
    }
}
    ?>