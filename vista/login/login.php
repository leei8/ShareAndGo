<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bienvenido</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="demo">
            <?php
            require_once "../multipagina/header.php";
            ?>
        </div>
        <div style="margin-bottom: -110px">
            <img src="../img/banner.jpg" style="width: 100%" />   
        </div>
        <div class="jumbotron"></div>
        <div class="jumbotron" style="margin-bottom: 20px">
            <div class="container text-center">

                <div class="col-sm-5">
                    <img src="../img/imagen_como_funciona.png" class="img-responsive" style="width:100%; border-radius: 10px" alt="Image">
                </div>
                <h1>¿Cómo funciona?</h1>
                <p style="margin-bottom: 30px; margin-top: 30px">¡Crea una cuenta y busca compañeros de viaje con<br>el mismo trayecto que necesites hacer!</p>
                <div class="container text-center" >
                    <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#registroPopUp" style="width: 400px">
                        <span class="glyphicon glyphicon-user" ></span> Regístrate 
                    </a>
                </div>
            </div>
        </div>

        <div class="jumbotron">
            <div class="container text-center">
                <div class="col-sm-6">
                <h1>¡Comparte el viaje!</h1>
                <p style="margin-bottom: 30px; margin-top: 30px">Busca el trayecto que más se adapte a tí o crea una ruta desde el lugar de salida hasta el centro para ayudar a gente que se encuentra en la misma situación que tú.</p>
                <p>Decide con quien disfrutar del viaje y compartir los gastos del día a día de una manera rápida y cómoda.</p>
                </div>
                <div class="col-sm-5" style="float:right">
                    <img src="../img/centro_zornotza.jpg" class="img-responsive" style="width:100%; border-radius: 10px" alt="Image">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row" style="text-align: center">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="../img/icono_ahorro.png" alt="Lights" style="width:50%">
                        <div class="caption">
                            <p>Comparte los gastos entre todos los pasajeros. ¡Ahorra tiempo y dinero!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="../img/icono_amigos.png" alt="Nature" style="width:50%">
                        <div class="caption">
                            <p>Tú eliges con quién viajas, conoce a gente con el mismo recorrido que tú y haz amigos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="../img/icono_eco.png" alt="Fjords" style="width:50%">
                        <div class="caption">
                            <p>Ayuda al medio ambiente, viajar con un coche contamina menos que con cinco :)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once "../multipagina/footer.php";
        ?>
    </body>
</html>
