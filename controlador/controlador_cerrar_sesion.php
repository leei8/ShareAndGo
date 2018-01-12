<?php

session_start();
unset($SESSION['email']);
session_destroy();

header('Location: ../vista/login/login.php');
