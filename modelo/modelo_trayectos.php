<?php

require_once '../controlador/conector/conector.php';

class modelo_trayecto {

    private $link;
    private $trayectos;
    private $trayectos_creados;
    private $trayectos_compartidos;
    private $coches;

    public function __construct() {
        $this->link = Conectar::conexion();
        $this->trayectos = array();
        $this->trayectos_creados = array();
        $this->trayectos_compartidos = array();
        $this->coches = array();
    }

    public function seleccionar_trayectos_del_usuario($id_usuario) {
        $consulta = $this->link->query("CALL sp_trayectos_compartidos_usuario_con_nombre('$id_usuario')");
        while ($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
            $this->trayectos_compartidos[] = $row;
        }
        $consulta->free_result();
        $this->link->close();
        return $this->trayectos_compartidos;
    }
    
    public function seleccionar_coches_usuario($id_usuario) {
        $consulta = $this->link->query("CALL sp_mostrar_vehiculos_usuario('$id_usuario')");
        while ($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
            $this->coches[] = $row;
        }
        $consulta->free_result();
        $this->link->close();
        return $this->coches;
    }
    
    public function seleccionar_trayectos_creados_usuario($id_usuario) {
        $consulta = $this->link->query("CALL sp_trayectos_creados_usuario('$id_usuario')");
        while ($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
            $this->trayectos_creados[] = $row;
        }
        $consulta->free_result();
        $this->link->close();
        return $this->trayectos_creados;
    }
    
    public function mostrar_todos_trayectos() {
        $consulta = $this->link->query("CALL sp_mostrar_todos_trayectos()");
        while ($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
            $this->trayectos[] = $row;
        }
        $consulta->free_result();
        $this->link->close();
        return $this->trayectos;
    }

}
