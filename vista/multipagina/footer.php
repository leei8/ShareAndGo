<footer>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    
                    <?php
                    
                    if($_SESSION == true){
                        
                    ?>
                    <a href="../menu_principal/menu_principal.php"><img src="../img/logo.png" class="" style="height: 100px"></a>
                    
                    <?php
                    }else{
                        ?>
                   <a href="../login/login.php"><img src="../img/logo.png" class="" style="height: 100px"></a>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-sm-2">

                    <ul style="list-style:none">
                        <label>Share&Go</label>
                        <li><a href="#">Sobre nosotros</a></li>
                        <li><a href="#">Opiniones</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>

                <div class="col-sm-3">

                    <ul style="list-style:none">
                        <label>Información legal</label>
                        <li><a href="#">Condiciones Generales de Uso</a></li>
                        <li><a href="#">Política de privacidad</a></li>
                        <li><a href="#">Política de cookies</a></li>
                    </ul>


                </div>
                <div class="col-sm-2">
                    <label>Patrocinadores</label>
                    <img src="../img/fp_zornotza.jpg" alt="" width="85%"/>
                </div>
                <div class="col-sm-2">
                    <label>Redes sociales</label><br>
                    <a href="https://facebook.com/" class="btn_red_social" target="_blank">
                        <img class="icono" src="../img/icono_facebook.png" alt="" id="icono"/>
                    </a>
                    <a href="https://www.twitter.com/" class="btn_red_social" target="_blank">
                        <img class="icono" src="../img/icono_twitter.png" alt="" id="icono"/>
                    </a>
                    <a href="https://www.instagram.com/" class="btn_red_social" target="_blank">
                        <img class="icono"src="../img/icono_instagram.png" alt="" id="icono"/>
                    </a>
                    <a href="https://www.youtube.com/" class="btn_red_social" target="_blank">
                        <img class="icono"src="../img/icono_youtube.png" alt="" id="icono"/>
                    </a>
                </div>
            </div>
            <br/>
            <div class="derechos">
                Share&Go S.L. 2005-2017. TODOS LOS DERECHOS RESERVADOS © con el apoyo de ekothazi group S.L. ®
            </div>
        </div>
    </div>
</footer>