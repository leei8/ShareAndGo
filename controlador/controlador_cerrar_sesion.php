<?php
session_start();

unset($SESSION['email']);
session_destroy(); //Se termina la sesión del usuario

header('Location: ../vista/login/login.php');
