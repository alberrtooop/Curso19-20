<?php
// Iniciar sesion 
session_start();
unset($_SESSION["Validacion"]);
session_destroy();

header("location:index.php");
