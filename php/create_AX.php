<?php
	include("configBD.php");
	include("getPosts.php");

	$curp = $_POST["curp"];
	$ingreso = $_POST["ingreso"];
	$carrera = $_POST["carrera"];
	$plan = $_POST["plan"];
	$especialidad = $_POST["especialidad"];
	$semestre = $_POST["semestre"];
	$creditos = $_POST["creditos"];
	$creditosins = $_POST["creditosins"];
	$promedio = $_POST["promedio"];
	$turno = $_POST["turno"];
	$genero = $_POST["genero"];
	$edad = $_POST["edad"];
	$anio = $_POST["anio"];
	$mes = $_POST["mes"];
	$dia = $_POST["dia"];
	$telefono = $_POST["telefono"];
	$movil = $_POST["movil"];
	$email = $_POST["email"];

	$fecha = $anio."-".$mes."-".$dia;
	$sqlIns = "INSERT INTO alumno (curp, ingreso, carrera, plan, especialidad, semestre, creditos, creditosinscritos, promedio, turno, genero, edad, fechanac, telefono, movil,email) VALUES ('$curp','$ingreso','$carrera','$plan','$especialidad','$semestre','$creditos','$creditosins','$promedio','$turno','$genero','$edad','$fecha','$telefono','$movil','$email')";
	$resIns = mysqli_query($conexion, $sqlIns);
	$infIns = mysqli_affected_rows($conexion);
	if($infIns == 1){
		echo 1; //OK. Se realizó el registro del estudiante
	}else{
		echo $sqlIns; //ERROR. No se pudo realizar el registro del estudiante
	}
?>