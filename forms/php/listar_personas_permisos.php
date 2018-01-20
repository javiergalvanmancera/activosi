<html lang="es">
    <head>
        <title>Personas - Permisos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../styles/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../styles/nav_bar.css"> 
        <link rel="stylesheet" type="text/css" href="../../styles/css/jquery.dataTables.min.css">
        <script src="../../styles/js/jquery-3.2.1.min.js"></script> <!--  esta librerias me permiten dar detalle a la tabla -->
        <script src="../../styles/js/jquery.dataTables.min.js"></script>  <!--  esta librerias me permiten dar detalle a la tabla -->
       <!--  funcion script con el id de la etiqueta table -->
        <script>   
            $(document).ready(function(){
            $('#tableuser').DataTable(); });
        </script>        
    </head> 

<?php  
include("../../funciones/conexiondb.php");
$conexion = @mysql_connect($servername,$username,$password) or die("No se establecio conexion con el servidor");
$db = @mysql_select_db(activosi,$conexion) or die("Problema de Seleccion Base de Datos");
$sql = "SELECT persona.tipo_usuario,persona.nombres_personas,persona.apellidos_personas,persona.dependencia,persona.cargo_persona,
permisos.tipo_acceso,permisos.tipo_solicitud,permisos.desc_sistema,permisos.desc_labor,permisos.fecha_solicitud,permisos.fecha_vigencia,permisos.fecha_atencion,permisos.j_autoriza,permisos.asesor_tics,permisos.admin_red
FROM persona,permisos
WHERE persona.id_personas=permisos.id_permisos ORDER BY persona.id_personas ASC";
$resultado = mysql_query($sql,$conexion);   

include ("header.php");
?><br><br><br><br><br><br>

        <div  class="section margen">
          <div class="container" style="width: 1600px;">
            <div class="row">
              <div class="panel panel-primary" >
                <div class="panel-heading" >
                  <h3 class="panel-title" style="padding: 5px">Usuarios con Permisos Asignados</h3></div>
                    <table class="table table-hover" id="tableuser" >
                        <thead> 
                            <tr align="center">
                                <th>Tipo Usuario</th>
                                <th>Nombres y Apellidos</th>                                               
                                <th>Dependencia</th> 
                                <th>Cargo</th>
                                <th>Tipo Acceso</th>                       
                                <th>Tipo Solicitud</th>  
                                <th>Des Sistema</th>
                                <th>Des Labor</th>  
                                <th>Fecha Solicitud</th>
                                <th>Fecha Vigencia</th>
                                <th>J. Autoriza</th> 
                                <th>Asesor TICS</th> 
                                <th>Admin. Red</th>   
                           </tr>
                        </thead>
     
    <?php 
        while($datos = mysql_fetch_array($resultado)){
        ?>
            <tr>
                <td><?php echo $datos["tipo_usuario"]?></td>
                <td><?php echo $datos["nombres_personas"]?> <?php echo $datos["apellidos_personas"]?></td>             
                <td><?php echo $datos["dependencia"]?></td>
                <td><?php echo $datos["cargo_persona"]?></td>   
                <td><?php echo $datos["tipo_acceso"]?></td> 
                <td><?php echo $datos["tipo_solicitud"]?></td> 
                <td><?php echo $datos["desc_sistema"]?></td> 
                <td><?php echo $datos["desc_labor"]?></td> 
                <td><?php echo $datos["fecha_solicitud"]?></td> 
                <td><?php echo $datos["fecha_vigencia"]?></td> 
                <td><?php echo $datos["j_autoriza"]?></td> 
                <td><?php echo $datos["asesor_tics"]?></td> 
                <td><?php echo $datos["admin_red"]?></td>                     
            </tr>
            <?php   
        }
        mysql_query($result,$conexion);
        mysql_close($conexion);
     ?>
    </table>       
      
    </div>
    <a class="btn btn-danger pull-rigth" target="blank" href="reporte1.php">Compromiso confidencialidad</a>
     <a class="btn btn-danger pull-rigth" target="blank" href="reporte3.php">Imprimir Solicitud</a>
</div>
  
</div>
</body>
</html>