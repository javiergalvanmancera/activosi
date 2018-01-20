<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../styles/alertyfyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="../styles/alertyfyjs/css/themes/default.css">
 <script src="../styles/js/jquery-3.2.1.min.js"></script>
 <script src="../styles/alertifyjs/alertify.js"></script>
</head>
<body>
<?php
include("conexiondb.php");

$conexion = @mysql_connect($servername,$username,$password) or die("No se establecio conexion con el servidor");
$db = @mysql_select_db(activosi,$conexion) or die("Problema de Seleccion Base de Datos");

$result = "INSERT INTO persona(id_personas,tipo_usuario,nombres_personas,apellidos_personas,dependencia,doc_persona,cargo_persona,telefono_persona) VALUES ('','$_POST[tipo_usuario]','$_POST[nombres_personas]','$_POST[apellidos_personas]','$_POST[dependencia]','$_POST[doc_persona]','$_POST[cargo_persona]','$_POST[telefono_persona]')";


// foreach me permite recorrer la variable de checkbox, implode me agrupa toda la informacion --  SELECT MAX(id_personas) AS id FROM persona
$var="";
if(!(empty($_POST['tacceso'])))
  { foreach($_POST['tacceso'] as $tacceso)
    { echo $tacceso.""; 
    }
  }
$var=implode($_POST['tacceso']);


$result1 = "INSERT INTO permisos(id_permisos,tipo_acceso,tipo_solicitud,desc_sistema,desc_labor,fecha_solicitud,fecha_vigencia,fecha_atencion,j_autoriza,asesor_tics,admin_red,id_persona_per) VALUES ('','".$var."','$_POST[tipo_solicitud]','$_POST[desc_sistema]','$_POST[desc_labor]','$_POST[fecha_solicitud]','$_POST[fecha_vigencia]','$_POST[fecha_atencion]','$_POST[j_autoriza]','$_POST[asesor_tics]','$_POST[admin_red]','$_POST[doc_persona]')";



mysql_query($result,$conexion);
mysql_query($result1,$conexion);
mysql_close($conexion);


if(isset($_POST["seleccion"])==false) 
    { 
      echo "<script>alert('REGISTRO REALIZADO CON EXITO')  </script>"; 
       echo "<script>location.href='../forms/php/listar_personas_permisos.php';</script>"; 
       // echo "<script>location.href='../forms/php/RegistroPersona.php';</script>"; 
        exit; 
    }else
?>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $().click(function(){
    alertify.success("mensaje de exito");   
    });
  })
</script>




