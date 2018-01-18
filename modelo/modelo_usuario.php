<?php require_once '../controlador/conector/conector.php';
class modelo_usuario{
    private $link;
    private $usuario;
    private $coches;
    
    public function __construct(){
        $this->link=Conectar::conexion();
        $this->usuario=array();
        $this->coches=array();
    }
    
    public function comprobar_login($email, $contrasena){
        $consulta=$this->link->query("CALL sp_comprobacion_sesion('$email', '$contrasena')");
        $usuario = mysqli_fetch_array($consulta);
        return $usuario;
    }
    
     public function modificar_usuario_por_id($id_usuario,$nombre,$apellido,$email,$telefono,$municipio){
        $consulta=$this->link->query("CALL sp_modificar_datos_usuario('$id_usuario','$nombre','$apellido','$email','$telefono','$municipio')");
        $usuario = mysqli_fetch_array($consulta);
        return $usuario;
    }
      
}
