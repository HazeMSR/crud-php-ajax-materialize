<!--Verifica la sesion-->
<?php
	session_start();
	if($_SESSION["valido"] == "sesion"){
		include("crud_BD.php");
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="utf-8">
<title>Demo-CRUD</title>
<link rel="stylesheet" type="text/css" href="../materialize/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="../fontAwesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../js/confirm/jquery-confirm.min.css">
<link rel="stylesheet" type="text/css" href="../js/validetta101/validetta.min.css">
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../materialize/js/materialize.min.js"></script>
<script src="../js/confirm/jquery-confirm.min.js"></script>
<script src="../js/validetta101/validetta.min.js"></script>
<script src="../js/validetta101/localization/validettaLang-es-ES.js"></script>
<script src="../js/crud.js"></script>
      <script>
         $(document).ready(function() {
            $('select').material_select();
         });
      </script>
</head>

<body>
	<section id="encabezado">
    </section>
    <section id="contenidos">
    	<div class="container">
        <!--Para cerrar sesion cambia el valor de la variable de sesion nombSesion a invalido, para que ya no se pueda ingresar -->
        	<a href="cerrarSesion.php?nombSesion=valido" class="btn blue">Cerrar Sesi&oacute;n</a> 
            <button id="nvoEst" class="btn blue">Nuevo Estudiante</button>
        	<div class="row">
            	<div class="col s12">
                	<table class="striped responsive-table">
                    	<thead>
<<<<<<< HEAD
                        	<tr><th>CURP</th><th>Acci&oacute;n</th>
=======
                        	<tr><th>CURP</th><th>Nombre</th><th>Operaciones</th>
>>>>>>> 4809289930f73580b86807a029a0815a3288097e
                        </thead>
                        <tbody>
  							<div id="infoEstudiantes">
                            	<?php echo $regEst; ?>
                          	</div>                      	
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </section>
    <section id="pie">
    </section>
    
    <!-- Modals -->
    
  	<div id="modalAX" class="modal">
        <div class="modal-content">
<<<<<<< HEAD
          	<h4 class="center-align blue white-text">SEE</h4>
=======
          	<h4 class="center-align blue white-text">TWeb - 20181</h4>
>>>>>>> 4809289930f73580b86807a029a0815a3288097e
          	<div id="respAX"></div>
        </div>
        <div class="modal-footer">
          	<a href="" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
        </div>
  	</div>
  
    <!--Modifica los datos del alumno con la instruccion update en el crud.js y update_AX-->
  	<div id="modalFormUpd" class="modal">
        <div class="modal-content">
<<<<<<< HEAD
          <h4 class="center-align blue white-text">SEE</h4>
=======
          <h4 class="center-align blue white-text">TWeb - 20181</h4>
>>>>>>> 4809289930f73580b86807a029a0815a3288097e
            <form id="formUpd">
            <div class="row">
              <div class="col s12 l6 input-field">
                <input type="hidden" id="curp" name="curp">
                <label for="ingreso">Periodo de Ingreso</label>
                <input type="text" id="ingreso" name="ingreso" data-validetta="required maxLength[6] minLength[6]">
              </div>
              <div class="col s12 l6 input-field">
                <label for="carrera">Carrera</label>
                <input type="text" id="carrera" name="carrera" data-validetta="required">
              </div>
            </div>
            <div class="row">
              <div class="col s12 l6 input-field">
                <label for="plan">Plan de estudios</label>
                <input type="text" id="plan" name="plan" data-validetta="required number maxSelected[2009]">
              </div>
              <div class="col s12 l6 input-field">
                <label for="especialidad">Especialidad</label>
                <input type="text" id="especialidad" name="especialidad" data-validetta="required">
              </div>
            </div>
            <div class="row">
              <div class="col s12 l4 input-field">
                <label for="semestre">Semestre</label>
                <input type="text" id="semestre" name="semestre" data-validetta="required number maxSelected[14]">
              </div>
              <div class="col s12 l4 input-field">
                <label for="creditos">Creditos</label>
                <input type="text" id="creditos" name="creditos" data-validetta="required number">
              </div>
              <div class="col s12 l4 input-field">
                <label for="creditosinscritos">Creditos Inscritos</label>
                <input type="text" id="creditosinscritos" name="creditosinscritos" data-validetta="required number">
              </div>
            </div>
            <div class="row">
              <div class="col s12 l4 input-field">
                <label for="promedio">Promedio</label>
                <input type="text" id="promedio" name="promedio" data-validetta="required number">
              </div>
              <div class="col s12 l4 input-field">
                <select id="turno" name="turno" data-validetta="required">
                  <option value="" disabled selected> -- </option>
                    <option value="M">Matutino</option>
                    <option value="V">Vespertino</option>
                    <option value="A">Ambos</option>
                </select>
                <label for="turno">Turno</label>
              </div>
              <div class="col s12 l4 input-field">
                <select id="genero" name="genero" data-validetta="required">
                  <option value="" disabled selected> -- </option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                    <option value="O">Otro</option>
                </select>
                <label for="genero">G&eacute;nero</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 l6 input-field">
                <label for="edad">Edad</label>
                <input type="text" id="edad" name="edad" data-validetta="required number">
              </div>
              <div class="col s12 l6 input-field">
                <label for="telefono">Tel&eacute;fono</label>
                <input type="text" id="telefono" name="telefono" data-validetta="required number maxLength[16]">
              </div>
            </div>
            <div class="row">
              <div class="col s12 l6 input-field">
                <label for="movil">M&oacute;vil</label>
                <input type="text" id="movil" name="movil" data-validetta="required number maxLength[16]">
              </div>
              <div class="col s12 l6 input-field">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" data-validetta="required">
              </div>
            </div>
              <div class="col s12 input-field">
                <button type="submit" class="btn blue" style="width:100%;">Actualizar</button>
              </div>
            </div>
            </form>
        </div>
  	</div>
    
<<<<<<< HEAD
    <!--Modal que contiene el formulario para insertar un nuevo alumno-->
    <div id="modalFormIns" class="modal">
        <div class="modal-content">
          <h4 class="center-align blue white-text">SEE</h4>
            <form id="formIns">
            <div class="row">
              <div class="col s12 l6 input-field">
                <label for="curp">CURP</label>
                <input type="text" id="curp" name="curp" data-validetta="required maxLength[18] minLength[18]">
              </div>
              <div class="col s12 l2 input-field">
                <label for="anio">A&ntilde;o</label>
                <input type="text" id="anio" name="anio" data-validetta="required number min[1917] max[2000]">
              </div>
              <div class="col s12 l2 input-field">
                <label for="mes">Mes</label>
                <input type="text" id="mes" name="mes" data-validetta="required number min[1] max[12]">  
              </div>
              <div class="col s12 l2 input-field">  
                <label for="dia">D&iacute;a</label>
                <input type="text" id="dia" name="dia" data-validetta="required number min[1] max[31]">    
              </div>
            </div>
            <div class="row">
              <div class="col s12 l6 input-field">
                <label for="ingreso">Periodo de Ingreso</label>
                <input type="text" id="ingreso" name="ingreso" data-validetta="required maxLength[6] minLength[6]">
              </div>
              <div class="col s12 l6 input-field">
                <label for="carrera">Carrera</label>
                <input type="text" id="carrera" name="carrera" data-validetta="required">
              </div>
            </div>
            <div class="row">
              <div class="col s12 l6 input-field">
                <label for="plan">Plan de estudios</label>
                <input type="text" id="plan" name="plan" data-validetta="required number maxSelected[2009]">
              </div>
              <div class="col s12 l6 input-field">
                <label for="especialidad">Especialidad</label>
                <input type="text" id="especialidad" name="especialidad" data-validetta="required">
              </div>
            </div>
            <div class="row">
              <div class="col s12 l4 input-field">
                <label for="semestre">Semestre</label>
                <input type="text" id="semestre" name="semestre" data-validetta="required number maxSelected[14]">
              </div>
              <div class="col s12 l4 input-field">
                <label for="creditos">Creditos</label>
                <input type="text" id="creditos" name="creditos" data-validetta="required number maxLength[3]">
              </div>
              <div class="col s12 l4 input-field">
                <label for="creditosins">Creditos Inscritos</label>
                <input type="text" id="creditosins" name="creditosins" value="0" data-validetta="required number maxLength[2]">
              </div>
            </div>
            <div class="row">
              <div class="col s12 l4 input-field">
                <label for="promedio">Promedio</label>
                <input type="text" id="promedio" name="promedio" data-validetta="required number">
              </div>
              <div class="col s12 l4 input-field">
                <select id="turno" name="turno" data-validetta="required">
                  <option value="" disabled selected> -- </option>
                    <option value="M">Matutino</option>
                    <option value="V">Vespertino</option>
                    <option value="A">Ambos</option>
                </select>
                <label for="turno">Turno</label>
              </div>
              <div class="col s12 l4 input-field">
                <select id="genero" name="genero" data-validetta="required">
                  <option value="" disabled selected> -- </option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                    <option value="O">Otro</option>
                </select>
                <label for="genero">G&eacute;nero</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 l6 input-field">
                <label for="edad">Edad</label>
                <input type="text" id="edad" name="edad" data-validetta="required number">
              </div>
              <div class="col s12 l6 input-field">
                <label for="telefono">Tel&eacute;fono</label>
                <input type="text" id="telefono" name="telefono" value="" data-validetta="number maxLength[16]">
              </div>
            </div>
            <div class="row">
              <div class="col s12 l6 input-field">
                <label for="movil">M&oacute;vil</label>
                <input type="text" id="movil" name="movil" value="" data-validetta="number maxLength[16]">
              </div>
              <div class="col s12 l6 input-field">
                <label for="email">E-mail</label>
                <input type="text" id="email" value="" name="email">
              </div>
            </div>
=======
    <div id="modalFormIns" class="modal">
        <div class="modal-content">
          <h4 class="center-align blue white-text">TWeb - 20181</h4>
            <form id="formIns">
            <div class="row">
              <div class="col s12 l6 input-field">
                <label for="curp">curp</label>
                <input type="text" id="curp" name="curp" data-validetta="required">
              </div>
              <div class="col s12 l6 input-field">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" data-validetta="required">
              </div>
              <div class="col s12 l6 input-field">
                <label for="primerApe">Primer Apellido</label>
                <input type="text" id="primerApe" name="primerApe" data-validetta="required">
              </div>
              <div class="col s12 l6 input-field">
                <label for="segundoApe">Segundo Apellido</label>
                <input type="text" id="segundoApe" name="segundoApe" data-validetta="required">
              </div>
              <div class="col s12 l6 input-field">
                <select id="sexo" name="sexo" data-validetta="required">
                	<option value=""> -------- </option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                </select>
                <label for="sexo">Sexo</label>
              </div>
              <div class="col s12 l6 input-field">
                <label for="correo">Correo</label>
                <input type="text" id="correo" name="correo" data-validetta="required">
              </div>
>>>>>>> 4809289930f73580b86807a029a0815a3288097e
              <div class="col s12 input-field">
                <button type="submit" class="btn blue" style="width:100%;">Insertar</button>
              </div>
            </div>
            </form>
        </div>
  	</div>
</body>
</html>
<?php
	}else{
		header("location:../index.php");
	}
?>