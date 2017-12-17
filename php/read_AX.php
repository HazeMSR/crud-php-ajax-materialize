<?php
	include("configBD.php");
	
	$curp = $_POST["curp"];
	$sqlVer = "SELECT * FROM alumno WHERE curp='$curp'";
	$resVer = mysqli_query($conexion, $sqlVer);
	
	$estudiante = mysqli_fetch_assoc($resVer);
	
	$json = json_encode($estudiante);
 
 	echo $json;
?>