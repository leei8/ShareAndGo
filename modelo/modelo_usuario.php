<?php

require_once '../controlador/conector/conector.php';

class modelo_usuario {

    private $link;
    private $usuario;
    private $coches;
    private $usuario_email;
  
    public function __construct() {
        $this->link = Conectar::conexion();
        $this->usuario = array();
        $this->coches = array();
        $this->usuario_email = array();
    }
    public function recoger_datos_usuario($email){
        $consulta= $this->link->query("CALL sp_mostrar_datos_usuario_correo('$email')");
        $usuario = mysqli_fetch_array($consulta);
        return $usuario;
    }

        public function comprobar_login_encriptado($emailUsuario, $contrasena) {
     
        $query = "SELECT * FROM usuarios WHERE email='" . $emailUsuario . "'";
        $result = $this->link->query($query);
        echo $emailUsuario;
        echo $contrasena;
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

            $passwordEncripted = $row['contrasena'];
            echo $row['contrasena'];
        }

        if ($dato_necesario = password_verify($contrasena, $passwordEncripted)) {
            echo'Pasahitza asmatu da, Ongi etorri';
            return $dato_necesario;
            echo $dato_necesario;
        } else {
            echo 'Pasahitza OKERRA, saiatu berriz';
        }
    }

    public function modificar_usuario_por_id($id_usuario, $nombre, $apellido, $email, $telefono, $id_municipio, $fecha_nacimiento) {
        $consulta = $this->link->query("CALL sp_modificar_datos_usuario('$id_usuario','$nombre','$apellido','$email','$telefono','$id_municipio','$fecha_nacimiento')");
    }

    public function usuario_por_email($email) {
        $consulta = $this->link->query("CALL sp_usuario_por_email('$email')");
        $this->usuario_email = mysqli_fetch_array($consulta);
        return $this->usuario_email;
    }

}
