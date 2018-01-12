<?php
require_once '../controlador/conector/conector.php';
class modelo_usuario{
    private $link;
    private $usuario;
    
    public function __construct(){
        $this->link=Conectar::conexion();
        $this->usuario=array();
    }
    
    public function comprobar_login($email, $contrasena){
        $consulta=$this->link->query("CALL sp_comprobacion_login('$email', '$contrasena')");
        $usuario = mysqli_fetch_array($consulta);
        return $usuario;
    }
}
