<?php
require_once '../controlador/conector/conector.php';
class modelo_peticiones{
    private $link;

    
    public function __construct(){
        $this->link=Conectar::conexion();
        $this->municipios=array();
    }
    
    public function aceptar_peticion($id_trayecto,$id_peticion){
        $this->link->query("CALL sp_aceptar_peticion ($id_trayecto,$id_peticion)");
    }
    public function rechazar_peticion($id_peticion){
        $this->link->query("CALL sp_rechazar_peticion ($id_peticion)");
    }
}
//aa
