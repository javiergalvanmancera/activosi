<?php
?>
<html lang="es">
    <head>
        <title>Menu</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../styles/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../styles/nav_bar.css"> 
    </head>
<body>
<div>
<div  clas="wrap">
    <!--aca va el if paramenu por roles-->
    <nav style="background-color: white;" class="navbar navbar-default">

            <div>
            <li class="dropdown">
                <a href="../htm/login.htm" class="dropdown">Inicio</a>
                <div class="dropdown-content">
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown">Registrar</a>
                <div class="dropdown-content">
                <a href="RegistroPersona.php" style="padding: 4% 0% 4% 2%">Registrar Solicitud</a>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown">Solicitud</a>
                <div class="dropdown-content">
              <!--   <a href="solicitud_exhumacion.php" style="padding: 4% 0% 4% 2%">Exhumacion</a> -->
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown">Administrar</a>
                 <div class="dropdown-content">
               <!--  <a href="crear_funeraria.php" style="padding: 4% 0% 4% 2%">Crear Funerarias</a>
                <a href="#" style="padding: 4% 0% 4% 2%">Crear Cementerios</a>
                <a href="crear_notaria.php" style="padding: 4% 0% 4% 2%">Crear Notarias</a> -->
               
                
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown">Usuarios</a>
               <!--  <div class="dropdown-content">
                <a href="usuarios_registrados.php" style="padding: 4% 0% 4% 2%">Listar Usuarios</a>
                <a href="crear_usuario.php" style="padding: 4% 0% 4% 2%">Crear Usuario</a> -->
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown">Consultas</a>
                <div class="dropdown-content">
                <a href="listar_personas_permisos.php"; " style="padding: 4% 0% 4% 2%">Registro de Permisos</a>
                <!-- <a href="#" style="padding: 4% 0% 4% 2%">Certificado Notaria</a>
                <a href="#" style="padding: 4% 0% 4% 2%">Certificado Inhumación</a>
                <a href="#" style="padding: 4% 0% 4% 2%">Certificado Exhumación</a>
                <a href="#" style="padding: 4% 0% 4% 2%">Consulta Extensa</a>
                <a href="ListarInhumaciones.php" style="padding: 4% 0% 4% 2%">Listar Inhumaciones</a>
                <a href="exhumacion.php" style="padding: 4% 0% 4% 2%">Listar Exhumaciones</a>   
                <a href="listar_funerarias.php" style="padding: 4% 0% 4% 2%">Listar Funerarias</a>
                <a href="listar_cementerios.php" style="padding: 4% 0% 4% 2%">Listar Cementerios</a>
                <a href="listar_municipios.php" style="padding: 4% 0% 4% 2%">Listar Municipios</a>
                <a href="listar_departamentos.php" style="padding: 4% 0% 4% 2%">Listar Departamentos</a> -->
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown">Soporte</a>
                <div class="dropdown-content">
                <a href="#" style="padding: 4% 0% 4% 2%">Manual de Usuario</a>
                <a href="#" style="padding: 4% 0% 4% 2%">Soporte Tecníco</a>
            <li class="dropdown">
                <a href="cerrar_session.php" class="dropdown">Salir</a>
                <div class="dropdown-content">
               
            </li>
       </div>
     </nav>
  </body>
</html>
