<?php


// Iniciamos la función de sesiones para almacenar cualquier tipo de inicio de sesión

session_start();


// Llamamos a la conexión de la db, para así poder usarla en las query que haremos para generar
// los login

include 'db.php';

// Aqui declaramos todos los parametros que seran almacenados por medio de los inputs que realice
// el usuario, luego los traemos aqui por medio del metodo 'post'.

$correo_ = $_POST['correo_'];
$password_ = $_POST['password_'];

$password_ = hash('MD5', $password_);

// Con los datos almacenados previamente de los inputs, realizamos una verificación a traves de una consulta
// a la db con la cual por medio de un 'if' (condicional) revisaremos si esos datos si existen.

$verificar_datos = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo='$correo_' AND contrasena='$password_' " );


if (mysqli_num_rows($verificar_datos) > 0){

    //Iniciamos una sesión para proteger/restringir algunas direcciones del sitio 
    $_SESSION['usuario'] = $correo_;

    echo '<script>alert ("Iniciando Sesión. \n Estas Siendo Redirigido...")
        window.location = "../pages/Retro_Services.php";
        </script>';
/*     header("refresh:0; url= ../pages/Retro_Services.php"); */
    exit();

    }else{
        echo '<script>alert ("Datos Incorrectos. \n Intenta de Nuevo")
            window.location = "../register.php";
             </script>';
/*         header("refresh:0; url= ../register.php"); */
        exit();
};




?>