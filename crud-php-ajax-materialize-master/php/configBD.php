<?php
	$servBD = "localhost";
	$usrBD = "root";
	$passBD = "n0m3l0";
	$nombreBD = "excelencia";
	
	$conexion = mysqli_connect($servBD, $usrBD, $passBD, $nombreBD);
	mysqli_set_charset($conexion, "utf8");
?>
