<?php


// Verificamos si existe una sesión antes de dejar ingresar a la página a traves de un URL Write.

    session_start();

    if(!isset($_SESSION['usuario'])){

        echo '<script>alert ("Ops.., Esta página parece estar restringida. \n Estas Siendo Redirigido...");
              window.location = "../register.php";
              </script>';
/*         header("location: ../register.php"); */
/*         header("refresh:0; url= ../register.php"); */
        die();
        
    }



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Retro Test Services | Disfruta - Caso</title>
    <link href="../styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

  </head>
    <body>

    <div class="p-h" style="background-image: url(../img/3.jpg)">
      <div class="logo">
        <p>Retro Services</p>
      </div>
      <a id="menu-icon" class="menu-icon" onclick="onMenuClick()">
        <i class="fa fa-bars"></i>
      </a>

      <div id="navigation-bar" class="nav-bar">
        <a href="/" class="active">Home</a>
      <a href="#">Dashboard</a>
 


    </div>
      <div class="h-r">
      <a id="reg" href="../public/logout.php">Cerrar Sesión [➥]</a>
    </div>
      </div>

      <div class="segmenter" style="background-image: url(../img/3.jpg)">
      
        <h1>Bienvenido A Retro Test Services</h1>
        <h2>Ahora Puedes Disfrutar De Todos Nuestros Servicios</h2>
        
      </div>

    </body>
</html>