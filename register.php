
<?PHP
echo '<script type="text/javascript">alert("Recuerde que este es un campo de prueba \n algunas funciones aún pueden tener defectos.");</script>';



// Verificación por si existe alguna sesión iniciada y se quiere inciar otra denuevo a traves de URL WRITE.

session_start();

  if(isset($_SESSION['usuario'])){

    echo '<script>alert ("¡Ey Alto!, Ya has Iniciado Sesión \n Estas Siendo Redirigido...");
    window.location = "./pages/Retro_Services.php";
    </script>';
  }
?>





<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Services | Login & Registro - Caso</title>
    <link href="styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="script.js"></script>
  </head>

  <body>

<!--   <div class="preloader">
<div class="status"></div>
</div>
 -->
  <div class="p-h" style="background-image: url(../img/footer.png)">
      <div class="logo">
        <p>Retro Test Services</p>
      </div>
      <a id="menu-icon" class="menu-icon" onclick="onMenuClick()">
        <i class="fa fa-bars"></i>
      </a>

      <div id="navigation-bar" class="nav-bar">
        <a href="/" class="active">Home</a>
        <a href="#">Servicios</a>
        <a href="#">Pruebas</a>
        <a href="#">Sobre Nosotros</a>
      </div>
</div>
<div class="mensaje"><marquee behavior="alternate" loop>📢 Enterate Todos Los Nuevos Servicios, Suscribete a Nuestro Boletin Informativo 📢<a href="#">¡Cick Aqui!</a></marquee></div>
<div class="segmenter" style="background-image: url(../img/left-bg-decor.png)">
 

<main>
<!-- Caja Que Contiene Ambos Formularios -->

<div class="contenedor_principal">

<div class="caja_trasera">
  <div class="caja_trasera_login">
    <h3>¿Ya tienes una cuenta?</h3>
    <p>¡Inicia Sesión Ahora y Descubre Nuestros Servicios!</p>
    <button id="btn_sesion">Iniciar Sesión</button>
  </div>
  <div class="caja_trasera_register">
    <h3>¿Ya te registraste?</h3>
    <p>¡Registrate Ahora y Descubre Nuestros Servicios!</p>
    <button id="btn_registro">Registrarse</button>
  </div>
</div>

<!-- Formularios de Login y Registro -->

<div class="contenedor_login_registro">

<!-- Form Login -->
<form action="./public/login_validacion.php" method="post" class="formulario_login">

  <h2>Iniciar Sesión</h2>
  <input type="email" name="correo_" placeholder="Correo Electronico" required>
  <input type="password" name="password_" placeholder="Contraseña" required>
  <button>Ingresar</button>

</form>
<!-- Form Registro -->
<form action="./public/validacion_datos.php" method="POST" class="formulario_registro" autocomplete="off">

<h2>Registrarse</h2>
<input type="text" name="nombre_completo" placeholder="Nombre Completo" required>
<input type="email" name="correo" placeholder="Correo Electronico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\[a-z]{2,3}$" class="form-control col-md-3" required/>
<input type="text" name="usuario" placeholder="Usuario" required>
<input type="date" name="fecha_nm" placeholder="Ingrese Su Fecha De nacimiento" required>
<input type="password" name="password" placeholder="Ingrese Su Contraseña" required>
<input type="password" name="password1" placeholder="Confirme Su Contraseña" required>
<button>Registrarse</button>


</form>

</div>
<?php
require_once './public/intento_seguro_pdo_mysql.php'
?>

<div class="meep" style="background-image: url(img/meep.png)">

</div>

</div>
</main>


<script src="script.js"></script>
<script src="./pages/loader.js"></script>

  </body>

</html>

