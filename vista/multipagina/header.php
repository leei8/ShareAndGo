<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <img src="../img/logo.png" style="height: 70px"/><br>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#iniciSesionPopUp"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
                <li><a href="#" data-toggle="modal" data-target="#registroPopUp"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
                <li><a href="#" data-toggle="modal" data-target="#publicarViajePopUp"><span class="glyphicon glyphicon-road"></span> Publicar trayecto</a></li>
                <li><a href="../mi_perfil/mi_perfil.php"><span class="glyphicon glyphicon-user"></span> Mi perfil</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a></li>
            </ul>
        </div>
    </div>
    <?php
    require_once 'popup/registro.php';
    require_once 'popup/login.php';
    require_once 'popup/publicar_trayecto.php';
    ?>
</nav>