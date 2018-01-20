<?php 
include ("conexiondb.php");
$conexion = @mysql_connect($servername,$username,$password) or die("No se establecio conexion con el servidor"); 
$db = @mysql_select_db(activosi,$conexion) or die("Problema de Seleccion Base de Datos");
$usuario = $_POST['user'];
$pass = $_POST['password'];
if(empty($usuario)) {
       echo "<script>alert('POR FAVOR DIGITE EL USUARIO');</script>"; 
       echo "<script>history.go(-1);</script>"; 
        exit();
    }
if(empty($pass)) {
       echo "<script>alert('POR FAVOR DIGITE LA CONTRASENA');</script>"; 
       echo "<script>history.go(-1);</script>"; 
        exit();
    }

$result = mysql_query("SELECT * from usuario where login='" . $usuario . "'");

if($row = mysql_fetch_array($result)){
    if($row['password'] ==  $pass){
        session_start();
        $_SESSION['user'] = $usuario;
    
        header("Location: ../forms/php/RegistroPersona.php");

    }else{
       
       echo "<script>alert('Usuario no EXISTE en la base de datos!  REGISTRESE');</script>"; 
       echo "<script>history.go(-1);</script>"; 
        exit();
    }
}
?>