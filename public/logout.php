<?php


// Acción de Cerrar Sesión y redirige a la pagina raiz (home) '/'. 
    session_start();
    session_destroy();
    header("location: ../index.php");

?>