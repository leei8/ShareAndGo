<?php
class Conectar {

    public static function conexion() {
        $localhost = 'localhost';
        $usuario = 'root';
        $contrasena = '';
        $tabla = 'shareandgo';

        $link = mysqli_connect($localhost, $usuario, $contrasena, $tabla);
        $link->query("SET NAMES 'utf8'");
        return $link;
    }

}
