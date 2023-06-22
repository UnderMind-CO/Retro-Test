<?php


// Verificamos si existe una sesión antes de dejar ingresar a la página a traves de un URL Write.

    session_start();

    if(!isset($_SESSION['usuario'])){

        echo '<script>alert ("Para Acceder A Esta Página, Requieres Iniciar Sesión \n Estas Siendo Redirigido...");
              window.location = "../register.php";
              </script>';
/*         header("location: ../register.php"); */
/*         header("refresh:0; url= ../register.php"); */
        session_destroy();
        die();
        
    }



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Retro Test Services | Disfruta - Caso</title>

    <link href="../styles.css" rel="stylesheet" />
    

    <meta name="author" content="UnderMind">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

  </head>
    <body>

    <!-- ***** Iniciador web ***** -->


<!--     <div class="preloader">
<div class="status"></div>
</div>
 -->
<!-- Menu | Navbar | -->

    <div class="p-h" style="background-image: url(../img/footer.png)">
      <div class="logo">
        <p>Retro Services</p>
      </div>
      <a id="menu-icon" class="menu-icon" onclick="onMenuClick()">
        <i class="fa fa-bars"></i>
      </a>

      <div id="navigation-bar" class="nav-bar">
        <a href="/" class="active">Home</a>
      <a href="#">Dashboard</a>
        <a href="./about.php">Sobre Nosotros</a>
<!--         <a href="#"></a>  -->
    </div>
      <div class="h-r">
      <a id="reg" href="../public/logout.php">Cerrar Sesión [➥]</a>
    </div>
      </div>
      
      <!-- ***** Imagen body y contenido ***** -->

<div class="img" style="background-image: url(../img/left-bg-decor.png);">

<div class="texto-bvn">
  <marquee direction="down" width="100%" height="520" behavior="alternate" style="border:hidden">
  <marquee behavior="alternate">
      
        <h1>Bienvenido A Retro Test Services</h1>
        <h2>Ahora Puedes Disfrutar De Todos Nuestros Servicios</h2>
        </marquee>
</marquee></div>



      
      <footer id="contact-us">
      <div class="row">
                <div class="col-lg-14">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2023 Retro Test Services

                        | Designed by <a rel="nofollow" href="https://github.com/UnderMind-CO/">UnderMind</a></p>
                    </div>
                </div>

            

      </footer>
      </div>

      <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    </body>
</html>