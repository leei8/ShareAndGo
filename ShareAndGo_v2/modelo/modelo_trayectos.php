<?php

require_once '../controlador/conector/conector.php';

class modelo_trayecto {

    private $link;
    private $trayectos;
    private $trayectos_creados;
    private $trayectos_compartidos;
    private $coches;
    private $peticiones;

    public function __construct() {
        $this->link = Conectar::conexion();
        $this->trayectos = array();
        $this->trayectos_creados = array();
        $this->trayectos_compartidos = array();
        $this->coches = array();
        $this->peticiones = array();
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

    public function seleccionar_peticiones_trayecto_del_usuario($id_usuario) {
        $consulta = $this->link->query("CALL sp_mostrar_peticiones_recibidas($id_usuario)");
        while ($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
            $this->peticiones[] = $row;
        }
        $consulta->free_result();
        $this->link->close();
        return $this->peticiones;
    }

    public function insertar_trayecto($vehiculo_seleccionado, $id_usuario, $municipio_salida, $plazas_disponibles, $tipo_trayecto) {

        echo $id_usuario . "<br>";
        echo $municipio_salida . "<br>";

        echo $vehiculo_seleccionado . "<br>";
        echo $plazas_disponibles . "<br>";
        echo $tipo_trayecto . "<br>";
       

        $mysqli = new mysqli("localhost","root","","shareandgo");
        $mysqli->autocommit(false);
        $stop = false;
        $sql1 = "INSERT INTO trayectos (`id_vehiculo`,`id_conductor`,`id_municipio_salida`,`fecha_creacion`,`plazas_disponibles`,`ocasional`) VALUES ($vehiculo_seleccionado,$id_usuario,$municipio_salida CURRENT_DATE(),$plazas_disponibles,$tipo_trayecto);";
        
        echo $sql1;
       $result = $mysqli->query($sql1);
        
        
        if ($mysqli->errno) {
            $stop = true;
            echo "Error: " . $mysqli->error . " .";
        }
//        $sql2 = "SELECT MAX(id_trayecto) from trayectos WHERE id_conductor = $id_usuario";
//        $result1 = $mysqli->query($sql2);
//
//        if ($mysqli->errno) {
//            $stop = true;
//            echo "Error: " . $mysqli->error . " .";
//        }
//
//        $row = mysqli_fetch_array($result1);
//        
//        print $row[0];
//        
        $sql3 = "INSERT INTO `comunidades`(`id_comunidad`, `comunidad`) VALUES (102,'AGOBIO')";
        $result2 = $mysqli->query($sql3);
        if ($mysqli->errno) {
            $stop = true;
            echo "Error: " . $mysqli->error . " .";
        }
//        
//        
//        $parada = explode(",", $paradas);
//
//        for ($i = 0; $i < count($parada); $i++) {
//            $sql4 = "CALL sp_insertar_parada_a_trayecto($row[0],$parada[$i])";
//        }
//
//
//        $dia_seleccionado = explode(",", $dias_seleccionados);
//
//        for ($j = 0; $j < count($dia_seleccionado); $i++) {
//            $sql5 = "CALL_sp_insertar_dia_a_trayecto($row[0],'$dia_seleccionado[$j]')";
//        }
//        $result3 = $this->link->query($sql4);
//
//        if ($this->link->errno) {
//            $stop = true;
//            echo "Error: " . $this->link->error . " .";
//        }
//
//        $result4 = $this->link->query($sql5);
//
//        if ($this->link->errno) {
//            $stop = true;
//            echo "Error: " . $this->link->error . " .";
//        }
        if ($stop == false) {
           $mysqli->commit();
            echo "Datuak ongi sartu dira";
        } else {
            $mysqli->rollback();
            echo "Ez da daturik sartu datu basean";
        }
    }

}
