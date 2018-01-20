<!DOCTYPE html>
<html lang="en">
<head>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<?php

?>
  
        <title>Formulario de Registro de Permisos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../styles/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../styles/nav_bar.css"> 

    </head>
    <?php
        include ("header.php");
    ?>
 

    <br><br><br>  
    <!--   <?php
        // include ("../../funciones/Insertregistro.php");
    ?> -->

<!-- funcion para el calendario , tener en cuenta el ancla mencionada en el input fecha -->
<script type="text/javascript">
    $(function() {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd',
            language: 'es'
        });
    });
    $(function() {
        $("#datepicker2").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd',
            language: 'es'
        });
    });
</script>

<body>

<div class="section margen">
  <div class="container" style="width: 1700px;">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">PERMISOS A ACCESOS BASICOS</h3></div>
              <div class="panel-body" >
                <div class="form-group" >
                  <div class="row">
                      <div class="col-md-6" ><br>
                          <form action="../../funciones/insertpersonas_p.php" method="post" name="datos">
                            <!-- variables que vienen del formulario RegistroPersona.php -->
                            <input id="tipo_usuario" name="tipo_usuario" type="hidden" value="<?php echo $_POST['tipo_usuario'] ?>" >
                            <input id="nombres_personas" name="nombres_personas" type="hidden" value="<?php echo $_POST['nombres_personas'] ?>" >
                            <input id="apellidos_personas" name="apellidos_personas" type="hidden" value="<?php echo $_POST['apellidos_personas'] ?>">
                            <input id="dependencia" name="dependencia" type="hidden" value="<?php echo $_POST['dependencia'] ?>" >
                            <input id="fecha_solicitud" name="fecha_solicitud" type="hidden"  value="<?php echo $_POST['fecha_solicitud'] ?>">
                            <input id="doc_persona" name="doc_persona" type="hidden" value="<?php echo $_POST['doc_persona'] ?>" >
                            <input id="cargo_persona" name="cargo_persona" type="hidden" value="<?php echo $_POST['cargo_persona'] ?>">
                            <input id="telefono_persona" name="telefono_persona" type="hidden" value="<?php echo $_POST['telefono_persona'] ?>">
                            <!-- __________________________________________________________________ -->

                            <label class="control-label" for="tipo_solicitud">Tipo de Solicitud</label>
                            <select id="tipo_solicitud" name="tipo_solicitud"  type="text" class="form-control input-md">
                                  <option value="Creacion">Creación</option>
                                  <option value="Modificacion">Modificación</option>
                                  <option value="Inactivacion">Inactivación</option>                                 
                            </select>
                          </div>
                               <div class="panel-body">
                                <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-12">
                                           <!-- Checkbox de tipos de acceso --> 
                                              <div class="col-md-3"><br>
                                                   <label class="form-check-label" >
                                                   <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="tacceso[]" value="Red " id="tipo_acceso">RED</label>                                             
                                             <br>
                                                    <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="tacceso[]" value="Correo " id="tipo_acceso">CORREO INSTITUCIONAL</label>                                            
                                             <br>
                                                    <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="tacceso[]" value="Internet " id="tipo_acceso">INTERNET</label>                                               
                                              <br>
                                                    <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="tacceso[]" value="Sistema Informacion" id="tipo_acceso">SISTEMA DE INFORMACION</label>                                              
                                              </div>     
                                       </div></div>
                                </div>
                            </div>
                            <div class="col-md-6"><br>
                                  <label class="control-label" for="desc_sistema">Descripción del Sistema de Información</label>
                                  <input id="desc_sistema" name="desc_sistema" type="text" placeholder="" class="form-control input-md" required="*" style="text-transform: uppercase;">
                            </div><br>
                            <div class="col-md-6">
                                          <label for="datepicker">Fecha de Vigencia</label>
                                          <input type="fecha_vigencia" class="form-control" id="datepicker" placeholder="" name="fecha_vigencia"/>
                              </div><br>
                         
                            <br>
                            <div class="col-md-12">
                              <label for="desc_labor">Labor a Realizar:</label>
                              <textarea class="form-control input-md " rows="5" id="desc_labor" name="desc_labor" style="text-transform: uppercase; background-color:#f9f9fb"></textarea>
                            </div>

                            <div class="col-md-6"><br><br>
                                  <label class="control-label" for="j_autoriza">Jefe Inmediato Autoriza</label>
                                  <input id="j_autoriza" name="j_autoriza" type="text" placeholder="" class="form-control input-md" required="*" style="text-transform: capitalize;">
                            </div>
                            <div class="col-md-6"><br><br>
                                  <label class="control-label" for="asesor_tics">Asesor TICS</label>
                                  <input id="asesor_tics" name="asesor_tics" type="text" placeholder="SERGIO OSWALDO CAJIAS LIZCANO" class="form-control input-md" style="text-transform: capitalize;">
                            </div>                                   
                            <div class="col-md-6"><br><br>
                                    <label class="control-label" for="admin_red">Administrdor de Red</label>  
                                    <input id="admin_red" name="admin_red" type="text" placeholder="" class="form-control input-md" style="text-transform: capitalize;">
                            </div>
                          </div>
                       </div>

                         <div class="col-md-6"><br>
                            <input  type="submit" class="btn btn-primary" id="enviar" value="Guardar Cambios" onclick="enviarValidar()"></input>&nbsp&nbsp&nbsp&nbsp
                            <script type="text/javascript"></script>
                            <input type="reset" class="btn btn-primary" id="borrar" value="Limpiar Formulario">                          
                          </div>
                  
            </div> 
           </div>
          </div>
         </div>  
        
        </div>
    </form> 
</body>
</html>

