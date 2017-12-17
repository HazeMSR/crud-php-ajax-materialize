<?php
	session_start();
	include("configBD.php");
	include("getPosts.php");
	
	/*Selecciona de la base de datos la curp que se envio en los
	formularios.*/
	$curp = $_POST["curp"];
	$contra = $_POST["contra"];
	$sqlAcc = "SELECT * FROM usuario WHERE usuario='$curp' AND password='$contra'";
	$resAcc = mysqli_query($conexion, $sqlAcc);
	$infAcc = mysqli_num_rows($resAcc);	

	if($infAcc >= 1){
		$_SESSION["valido"] = "sesion";
		echo 1;
		//Si es correcto regresa 1 al ajax de index.js
	}else{
		echo $sqlAcc;
	}

?>