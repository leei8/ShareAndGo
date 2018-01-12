<?php
    require_once '../controlador/conector/conector.php';
class modelo_marcas{
    private $link;
    private $marcas;
    
    public function __construct(){
        $this->link=Conectar::conexion();
        $this->marcas=array();
    }
    
    public function mostrar_marcas(){
        $consulta=$this->link->query("CALL sp_mostrar_marcas_vehiculos()");
        while($filas=$consulta->fetch_assoc()){
            $this->marcas[]=$filas;
        }
        return $this->marcas;
    }
}
