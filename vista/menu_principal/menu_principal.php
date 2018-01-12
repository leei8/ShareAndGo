<!DOCTYPE html>
<!--
aa
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Menu principal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="../css/menu_principal.css">
        <link rel="stylesheet" href="../css/combobox_buscador.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../../js/publicar_trayecto.js" type="text/javascript"></script>
        <script src="../../js/cargar_combos_municipio.js" type="text/javascript"></script>
        <script src="../../js/cargar_combo_marcas.js" type="text/javascript"></script>
        <script src="../../js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="../../js/menu_principal.js" type="text/javascript"></script>
        <script src="../../js/angular.min.js" type="text/javascript"></script>
        <script src="../../js/cargar_datos_filtro.js" type="text/javascript"></script>
       
     

    </head>
    <body>
        <?php
        require_once "../multipagina/header.php";
        ?>
        <div class="jumbotron" style="margin-bottom: -30px">
            <div class="container text-center">
                 <input class="topcoat-combo-input-filtro" type="text" id="municipio" ng-model="municipio_busqueda" list="poo" placeholder="Salgo de...">
                <datalist id="poo">
                    
                </datalist>
                
                <div class="diasBuscador">
                    <table>
                        <tr>
                            <td><div class="diaBuscador">L</div></td>
                            <td><div class="diaBuscador">M</div></td>
                            <td><div class="diaBuscador">X</div></td>
                            <td><div class="diaBuscador">J</div></td>
                            <td><div class="diaBuscador">V</div></td>
                        </tr>   
                    </table>
                </div> 
            </div>
            <div style="text-align: center">
                <div class="container text-center">
                    <div class="row" ng-controller="mainController">
                        <!-- FALTA PONER FOREACH -->
                        <?php require '../multipagina/tarjeta_viaje.php'; ?>
                        <!-- ------------------- -->
                    </div>
                </div>
                <div class="imagen">
                   
                    <div class="" style="text-align: center">
                        <h2>Jane Doe</h2>
                        <p class="title">CEO & Founder</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                        <p>example@example.com</p>
                        <p><button id="registrarcoche" class="btn btn-primary" data-toggle="modal" data-target="#myModalRegistro">Registrar coche</button></p>
                    </div>
                    <?php
                    require_once "../multipagina/popup/registrar_coche.php";
                    ?>
                </div>
            </div>
        </div>
        <?php
        require_once "../multipagina/footer.php";
        ?>
    </body>
</html>
