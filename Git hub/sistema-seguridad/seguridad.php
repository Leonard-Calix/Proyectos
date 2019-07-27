<?php
    session_start(); 
    if (!isset($_SESSION["usuario"]))
        header("Location: ../landing-page/index.html");
    //if ($_SESSION["tipoUsuario"]=="ADMIN")
?>