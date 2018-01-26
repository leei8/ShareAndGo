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

    public function insertar_trayecto($vehiculo_seleccionado, $id_usuario, $municipio_salida, $new_format, $plazas_disponibles, $tipo_trayecto, $paradas, $dias_seleccionados) {

        echo $id_usuario . "<br>";
        echo $municipio_salida . "<br>";
        echo $new_format . "<br>";
        echo $vehiculo_seleccionado . "<br>";
        echo $plazas_disponibles . "<br>";
        echo $tipo_trayecto . "<br>";
        echo $paradas . "<br>";

        $mysqli = new mysqli("localhost", "root", "", "shareandgo");
        $mysqli->autocommit(false);
        $stop = false;
        $sql1 = "INSERT INTO trayectos (`id_vehiculo`,`id_conductor`,`id_municipio_salida`,`fecha_creacion`,`plazas_disponibles`,`ocasional`) VALUES ($vehiculo_seleccionado,$id_usuario,$municipio_salida,'$new_format',$plazas_disponibles,$tipo_trayecto);";

        echo $sql1;
        $result1 = $mysqli->query($sql1);


        if ($mysqli->errno) {
            $stop = true;
            echo "Error: " . $mysqli->error . " .";
        }
        $sql2 = "SELECT MAX(id_trayecto) from trayectos WHERE id_conductor = $id_usuario";
        $result2 = $mysqli->query($sql2);


        $row = mysqli_fetch_array($result2);

        $id_trayecto_transacc = $row[0];
        if ($mysqli->errno) {
            $stop = true;
            echo "Error: " . $mysqli->error . " .";
        }

        $paradas = substr($paradas, 0, -1);
        $parada = explode(',', $paradas);


        for ($i = 0; $i < count($parada); $i++) {
            echo $parada[$i];
            $sql3 = "INSERT INTO `municipios_trayectos`(`id_trayecto`, `id_municipio`) VALUES ($id_trayecto_transacc,$parada[$i])";

            echo $sql3;
            $result3 = $mysqli->query($sql3);
            if ($mysqli->errno) {
                $stop = true;
                echo "Error: " . $mysqli->error . " .";
            }
        }

        $sql4 = "INSERT INTO `municipios_trayectos`(`id_trayecto`, `id_municipio`) VALUES ($id_trayecto_transacc,$municipio_salida)";
        echo $sql4;
        $result4 = $mysqli->query($sql4);
        if ($mysqli->errno) {
            $stop = true;
            echo "Error: " . $mysqli->error . " .";
        }

        $dia_seleccionado = explode(",", $dias_seleccionados);

        for ($j = 0; $j < count($dia_seleccionado); $j++) {
            echo $dia_seleccionado[$j];
            $sql5 = "INSERT INTO `trayectos_dias`(`id_trayecto`, `dia`) VALUES ($id_trayecto_transacc,'$dia_seleccionado[$j]');";
            echo $sql5;
            $result5 = $mysqli->query($sql5);

            if ($mysqli->errno) {
                $stop = true;
                echo "Error: " . $mysqli > error . " .";
            }
        }

        if ($stop == false) {
            $mysqli->commit();
            echo "Datuak ongi sartu dira";
        } else {
            $mysqli->rollback();
            echo "Ez da daturik sartu datu basean";
        }
    }

    public function insertar_enviar_trayecto($id_trayecto, $id_usuario){
        $this->link->query("CALL sp_insertar_peticion($id_trayecto, $id_usuario)");
    }

    
}
