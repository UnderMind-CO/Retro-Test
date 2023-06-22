<?php

#VARIABLES GLOBALES

$host = 'localhost';
$password = '';
$database = 'auth_test_services';
$username = 'root';
$dbname = 'auth_test_services';

#CREA LA CONEXIÓN A LA DB CON LAS VARIABLES GLOBALES

$conn = mysqli_connect($host, $username, $password, $database);

#DECODIFICACIÓN LATINA PARA LEER CARACTERES COMO LA 'Ñ y TILDES'

mysqli_set_charset($conn, "utf8");

# REVISA LA CONEXIÓN

if (!$conn) {
    die("Conexión Fallida: ". mysqli_connect_error($mesage));
    
}
echo "'Conexión Exitosa a la DB ->':. $database ";

    
?>