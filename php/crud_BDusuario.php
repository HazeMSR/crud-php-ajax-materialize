<?php
	include("configBD.php");
	include("getPosts.php");
	
	/*Selecciona de la base de datos la curp que se envio en los
	formularios.*/
	//$curp = $_POST["curp"];
	//$pass = $_POST["pass"];
	$usuario=$_SESSION["usuario"];
	$sqlEst = "SELECT * FROM alumno WHERE usuario='$usuario'";
	$resEst = mysqli_query($conexion, $sqlEst);
	$filasA = mysqli_fetch_array($resEst,MYSQLI_BOTH);
	$estudiante = mysqli_fetch_assoc($resEst);
	$jsonA = json_encode($estudiante);

 	$sqlEst = "SELECT * FROM usuario WHERE usuario='$usuario'";
	$resEst = mysqli_query($conexion, $sqlEst);
	$filasU = mysqli_fetch_array($resEst,MYSQLI_BOTH);
	$estudiante = mysqli_fetch_assoc($resEst);
	$jsonU = json_encode($estudiante);
 	//echo $json;
	
?>