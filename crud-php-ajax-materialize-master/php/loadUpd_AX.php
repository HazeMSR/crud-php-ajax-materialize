<?php
	include("configBD.php");
	include("getPosts.php");
	
	$curp = $_POST["curp"];
	$sqlLoadUpd = "SELECT * FROM alumno WHERE curp = '$curp'";
	$resLoadUpd = mysqli_query($conexion, $sqlLoadUpd);
	$infBoleta = mysqli_fetch_assoc($resLoadUpd);
	$json = json_encode($infBoleta);
	echo $json;
?>