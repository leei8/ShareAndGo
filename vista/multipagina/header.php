<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a href="../menu_principal/menu_principal.php"><img src="../img/logo.png" style="height: 70px"/></a><br>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">

                <?php
                if ($_SESSION == true) {
                ?>
                <li><p class="nombreUsuario"><?php echo "Hola, " . $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?></p></li>
                    <li><a href="../menu_principal/menu_principal.php"><span class="glyphicon glyphicon-home"></span></a>
                    <li><a href="#" data-toggle="modal" data-target="#publicarViajePopUp"><span class="glyphicon glyphicon-road"></span> Publicar trayecto</a></li>
                    <li><a href="../mi_perfil/mi_perfil.php"><span class="glyphicon glyphicon-user"></span> Mi perfil</a></li>
                    <li><a href="../../controlador/controlador_cerrar_sesion.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a></li>
                <?php
                } else {
                ?>
                    <li><a href="#" data-toggle="modal" data-target="#iniciSesionPopUp"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#registroPopUp"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <?php
    require_once 'popup/registro.php';
    require_once 'popup/login.php';
    require_once 'popup/publicar_trayecto.php';
    ?>
</nav>