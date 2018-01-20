<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <script src="../../styles/js/push.min.js"></script>

  <link rel="stylesheet" type="text/css" href="../styles/alertyfyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="../styles/alertyfyjs/css/themes/default.css">
 <script src="../styles/js/jquery-3.2.1.min.js"></script>
 <script src="../styles/alertifyjs/alertify.js"></script>

<?php
include ("header.php");
?><br><br><br><br><br><br>
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
            <h3 class="panel-title">SOLICITUD DE ACCESO A LOS ACTIVOS DE INFORMACION</h3></div>
              <div class="panel-body" >
                <div class="form-group" >
                  <div class="row">
                      <div class="col-md-6" ><br>
                          <form action="/activosi/forms/php/registro_permiso.php" method="post" name="datos">
                            <label class="control-label" for="tipo_usuario">Tipo de Usuario</label>
                            <select id="tipo_usuario" name="tipo_usuario"  type="text" class="form-control input-md">
                                  <option value="Funcionario">Funcionario</option>
                                  <option value="Contratista">Contratista</option>
                                  <option value="Practicante">Practicante</option>                                 
                            </select>
                          </div>
                          <div class="col-md-6"><br>
                                  <label for="datepicker">Fecha de Solicitud</label>
                                  <input type="fecha_solicitud" class="form-control" id="datepicker" placeholder="" name="fecha_solicitud"/>
                          </div>

                            <div class="col-md-6"><br>
                                  <label class="control-label" for="nombres_personas">Nombres</label>
                                  <input id="nombres_personas" name="nombres_personas" type="text" placeholder="" class="form-control input-md" required="*" style="text-transform: uppercase;">
                            </div>
                             <div class="col-md-6"><br>
                                  <label class="control-label" for="apellidos_personas">Apellidos</label>
                                  <input id=" apellidos_personas" name="apellidos_personas" type="text" placeholder="" class="form-control input-md" required="*" style="text-transform: uppercase;">
                            </div>                          
                             <div class="col-md-6"><br><br>
                                    <label class="control-label" for="dependencia">Dependencia</label></br>
                                    <select id="dependencia" name="dependencia"  type="text" class="form-control input-md">
                                        <option value=Secretaria Hacienda">Secretaria Hacienda</option>
                                        <option value="Oficina Sistemas">Oficina Sistemas</option>
                                        <option value="Atencion al Ciudadano">Atencion al Ciudadano</option>
                                   </select>
                            </div>    
                            <div class="col-md-6"><br><br>
                                  <label class="control-label" for="doc_persona">Documento</label>
                                  <input id="doc_persona" name="doc_persona" type="text" placeholder="" class="form-control input-md">
                            </div> 
                             <div class="col-md-6"><br><br>
                                  <label class="control-label" for="cargo_persona">Cargo</label>
                                  <input id="cargo_persona" name="cargo_persona" type="text" placeholder="" class="form-control input-md" required="*"
                                  style="text-transform: uppercase;">
                            </div>

                            <div class="col-md-6"><br><br>
                                    <label class="control-label" for="telefono_persona">Telefono</label>  
                                    <input id="telefono_persona" name="telefono_persona" type="text" placeholder="" class="form-control input-md">
                            </div>
                          </div>
                       </div>
                       <div class="col-md-6" ><br>
                          <input  type="submit" class="btn btn-primary" id="enviar" value="Siguiente" onclick="enviarValidar()"></input>&nbsp&nbsp&nbsp&nbsp
                          <script type="text/javascript"></script>
                          <input type="reset" class="btn btn-primary" id="borrar" value="Limpiar Formulario">
                        </div>
                  </div>
            </div>
          </div>
        </div>                               
    </div><br>
  <div><br>
 </div>
  </form> 

</body>
</html>       
                     