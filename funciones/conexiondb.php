<?php
$servername = "localhost";
$username = "root";
$password = "13719140";

// Create connection
$conexion = mysqli_connect($servername,$username,$password);

// Check connection
if (!$conexion) {
    die("Connection failed: " .mysqli_connect_error());
}
//echo "Conexion Exitosa  Con Base de Datos";
?>