<?php

require_once '../controlador/conector/conector.php';
class modelo_municipios{
    private $link;
    private $municipios;
    
    public function __construct(){
        $this->link=Conectar::conexion();
        $this->municipios=array();
    }
    
    //Se recogen todos los municipios de la comunidad o provincia seleccionada
    public function cargar_municipios($id_comunidad, $id_provincia){
        $consulta=$this->link->query("CALL sp_mostrar_municipios_comunidad ($id_comunidad, '$id_provincia')");
        while($filas=$consulta->fetch_assoc()){
            $this->municipios[]=$filas;
        }
        $this->link->close();
        return $this->municipios;
    }
}
?>
