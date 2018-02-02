<?php
session_start();
if(isset ($_SESSION['loggedin'])){
?>
<html ng-app="mi_buscador">
    <head>
        <title>Menu principal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <script src="../../js/angular.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/menu_principal.css">
        <link rel="stylesheet" href="../css/combobox_buscador.css">
        <link rel="stylesheet" href="../css/publicar_trayecto.css">
        <link rel="stylesheet" href="../css/mi_perfil.css">
         <link href="../css/combobox_buscador.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../../js/cargar_combo_mis_coches_publicar_trayecto.js" type="text/javascript"></script>
        <script src="../../js/cargar_combos_municipio.js" type="text/javascript"></script>
        <script src="../../js/cargar_combo_marcas.js" type="text/javascript"></script>
        <script src="../../js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="../../js/menu_principal.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="../../js/cargar_datos_filtro.js" type="text/javascript"></script>
        <script src="../../js/registrar_vehiculo.js" type="text/javascript"></script>
        <script src="../../js/publicar_trayecto.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../../js/validacion_campos.js" type="text/javascript"></script>
        
    </head>
       
    <body>
        <?php
        require_once "../multipagina/header.php";
        ?>
        <div class="jumbotron" style="margin-bottom: -30px">
            <div class="container text-center">
                <input class="topcoat-combo-input-filtro" type="text"  maxlength="50" onkeypress="return solo_letras(event)" placeholder="Salgo de..." ng-model="TEXTOBusqueda">

            </div>
            <div style="text-align: center">
                <div class="container text-center">
                    <div class="row" ng-controller="mainController">
                        <?php include ('../multipagina/tarjeta_viaje.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron" style="margin-bottom: 20px; margin-top: 50px">
            <div class="container text-center">

                <div class="col-sm-5">
                    <img src="../img/registro_coche.jpg" class="img-responsive" style="width:100%; border-radius: 10px" alt="Image"/>

                </div>
                <div class="col-sm-6">

                    <h2>¿Quieres publicar tu trayecto?</h2>
                    <p style="margin-bottom: 30px; margin-top: 30px">Antes de publicarlo, necesitas tener un vehículo.<br>Registra tantos coches como tengas y ¡disfruta compartiendo tu viaje con los demás!</p>
                    <div class="container text-center" >

                        <button href="#" class="btn btn-info btn-lg" id="registrarcoche" data-toggle="modal" data-target="#myModalRegistro" style="width: 400px">
                            <span class="glyphicon glyphicon-plus-sign"></span> Registrar coche
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once "../multipagina/popup/registrar_coche.php";
        
        ?>
    </div>

    <?php
    require_once "../multipagina/footer.php";
    } else {
    header('Location: ../login/login.php');
} 
    ?>
</body>
</html>
