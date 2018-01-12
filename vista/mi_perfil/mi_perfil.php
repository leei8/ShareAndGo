<!DOCTYPE html>
<?php
        session_start();
        ?>
<html lang="en">
    <head>
        <title>Mi perfil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/miPerfil.css">
        <link rel="stylesheet" href="../css/header.css">
          <link rel="stylesheet" href="../css/footer.css">
          <link rel="stylesheet" href="../css/publicar_trayecto.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="../css/combobox_buscador.css" rel="stylesheet" type="text/css"/>
        <link href="../css/publicar_trayecto.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/registrar_coche.js" type="text/javascript"></script>
        <script src="../../js/publicar_trayecto.js" type="text/javascript"></script>
        <script src="../../js/cargar_combos_municipio.js" type="text/javascript"></script>
        <script src="../../js/angular.min.js" type="text/javascript"></script>
        <script src="../../js/cargar_combo_marcas.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="demo">
            <?php
            require_once "../multipagina/header.php";
            ?>
        </div>
        <div class="jumbotron">
            <div class="row">
                <div class="col-sm-2" style="text-align: center">
                    <img src="https://goo.gl/FoZNrv" class="img-circle" alt="Cinque Terre" width="200" height="200" style="padding: 15px;">
                </div>
                <div class="col-sm-5">
                    <h3>Datos personales:</h3>
                    <ul style="list-style: none; padding: 5px;">
                        <li>Nombre: </li>
                        <li>Apellido: </li>
                        <li>Email: </li>
                        <li>Fecha de nacimiento: </li>
                        <li>Telefono: </li>
                        <li>municipio: </li>
                    </ul>
                </div>
                <div class="col-sm-5 divBotones">
                    <button href="#" class="btn btn-info boton" id="modifiperfil" data-toggle="modal" data-target="#modificarPerfil">
                     <span class="glyphicon glyphicon-wrench"></span> Modificar perfil    
                    </button>
                    <br>
                    <button href="#" class="btn btn-info boton" id="registrarcoche" data-toggle="modal" data-target="#myModalRegistro">
                        <span class="glyphicon glyphicon-plus-sign"></span> Registrar vehículo
                    </button>
                        <br>
                    <button href="#" class="btn btn-info boton" id="anadirviaje" data-toggle="modal" data-target="#publicarViajePopUp">
                        <span class="glyphicon glyphicon-road"></span> Nuevo trayecto 
                    </button>
                </div>
            </div>
        </div>
        <?php
        require_once '../multipagina/popup/modificar_perfil.php';
        require_once '../multipagina/popup/registrar_coche.php';
        require_once '../multipagina/popup/publicar_trayecto.php';
        ?>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Mensajes y peticiones</a></li>
            <li><a data-toggle="tab" href="#menu1">Mis trayectos compartidos</a></li>
            <li><a data-toggle="tab" href="#menu2">Mis trayectos creados</a></li>
            <li><a data-toggle="tab" href="#menu3">Mis vehículos</a></li>
        </ul>

        <div class="tab-content tablasPerfil">
            <div id="home" class="tab-pane fade in active">
                <?php require_once "secciones_mi_perfil/mensajes.php"; ?>
            </div>
            <div id="menu1" class="tab-pane fade">
                <?php require_once "secciones_mi_perfil/trayectos_creados.php"; ?>
            </div>
            <div id="menu2" class="tab-pane fade">
                <?php require_once "secciones_mi_perfil/trayectos_compartidos.php"; ?>
            </div>
            <div id="menu3" class="tab-pane fade">
                <?php require_once "secciones_mi_perfil/coches.php"; ?>
            </div>
        </div>
        <?php
        require_once "../multipagina/footer.php";
        ?>
    </body>
</html>
