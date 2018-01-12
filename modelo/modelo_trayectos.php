<?php

require_once '../controlador/conector/conector.php';

class modelo_trayecto {

    private $link;
    private $trayecto;

    public function __construct() {
        $this->link = Conectar::conexion();
        $this->trayecto = array();
    }

    public function seleccionar_trayectos_del_usuario($id_usuario) {
        $consulta = $this->link->query("CALL sp_seleccionar_trayectos_de_usuario('$id_usuario')");
        while ($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
            $this->trayecto[] = $row;
        }
        $consulta->free_result();
        $this->link->close();
        return $this->trayecto;
    }

    public function mostrar_todos_trayectos() {
        $consulta = $this->link->query("CALL sp_mostrar_todos_trayectos()");
        while ($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
            $this->trayecto[] = $row;
        }
        $consulta->free_result();
        $this->link->close();
        return $this->trayecto;
    }

}
