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
    
    //Se recoge el usuario por el email
    public function recoger_datos_usuario($email){
        $consulta= $this->link->query("CALL sp_mostrar_datos_usuario_correo('$email')");
        $usuario = mysqli_fetch_array($consulta);
        return $usuario;
    }
        //VERIFICACION DE CONTRASEÑA ENCRIPTADA
        public function comprobar_login_encriptado($emailUsuario, $contrasena) {

        $query = "SELECT * FROM usuarios WHERE email='" . $emailUsuario . "'";
        $result = $this->link->query($query);

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

            $passwordEncripted = $row['contrasena'];

        }

        if ($dato_necesario = password_verify($contrasena, $passwordEncripted)) {
            echo'Contraseña válida.';
            return $dato_necesario;

        } else {
            echo 'Contraseña no válida.';
        }
    }
    //Modificar datos de usuario con id (la id se recoge de la sesión)
    public function modificar_usuario_por_id($id_usuario, $nombre, $apellido, $email, $telefono, $id_municipio, $fecha_nacimiento) {
        $consulta = $this->link->query("CALL sp_modificar_datos_usuario('$id_usuario','$nombre','$apellido','$email','$telefono','$id_municipio','$fecha_nacimiento')");
    }
    //Se recoge el usuario por el email
    public function usuario_por_email($email) {
        $consulta = $this->link->query("CALL sp_usuario_por_email('$email')");
        $this->usuario_email = mysqli_fetch_array($consulta);
        return $this->usuario_email;
    }
    //La modificación de la contraseña no siempre tiene que hacerse al modificar el usuario
    public function modificar_contrasena_usuario($id_usuario,$contrasena){
       $consulta=$this->link->query("CALL sp_modificar_contrasena_usuario($id_usuario,'$contrasena')");
   }

}