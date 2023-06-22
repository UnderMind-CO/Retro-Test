<?php

// Llamamos a la conexión de la db, para así poder usarla en las query que haremos para generar
// los registros

    include 'db.php';

// Aqui declaramos todos los parametros que seran incluidos en la db por medio de los inputs que realice
// el usuario, luego los traemos aqui por medio del metodo 'post'

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $fecha_nm = $_POST['fecha_nm'];
    $password = $_POST['password'];

    // variable extra para encriptar la contraseña

    $password = hash('md5', $password);


// Aqui preparamos la consulta de los datos de la db con los parametros previamente declarados

    $consulta = "INSERT INTO usuarios (nombre_completo, correo, usuario, fecha_nacimiento, contrasena) 
                 VALUES ('$nombre_completo', '$correo', '$usuario', '$fecha_nm', '$password')";


// Verificador de coincidencias, con esto evito que se repitan algunos datos de los input en la db.
$resultado_datos1 = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo ='$correo' ");

    if (mysqli_num_rows($resultado_datos1) > 0 ) {
        echo '<script>alert ("El Correo Electronico ya existe \n Intentelo Nuevamente...")</script>';
        header("refresh:0; url=../register.php");
        exit();
        }


// Verificador #2 correo        
$resultado_datos = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario ='$usuario' ");

if (mysqli_num_rows($resultado_datos) > 0 ) {
    echo '<script>alert ("El Usuario Que usaste ya existe \n Intentelo Nuevamente...")</script>';
    header("refresh:0; url=../register.php");
    exit();    
}    

// Verificador #2 correo





// En esta linea almacenamos la conexión a la db junto a la consulta 'query' que realizaremos ($consulta)para
// generar el registro de nuevos usuarios

$registro = mysqli_query($conn, $consulta);

// Aqui mediante una condición 'if' decimos que si la query + la conexión que alamcenamos previamente son 
// correctas (verdaderas) entonces muestre un mensaje, de lo contrario (else) muestre un mensaje de error.

    if ($registro){
        echo '<script>alert("¡Registro exitoso!")</script>';
        header("refresh:0; url=../pages/Retro_Services.php");
    }else{
        echo '<script>alert ("Error al registrar, Por favor Intente Nuevamente.")</script>';
        header("refresh:0; url=../register.php");
    }

    //Una vez realicemos las llamadas necesarias tanto a la db como a los datos almacenados de la query,
    // tendremos que cerrar la llamada a 'msqli' que hicimos antes de poder hacer alguna otra.

    mysqli_close($conn);


    ?>


