<?php
	session_start();
	include("configBD.php");
	include("getPosts.php");
	
<<<<<<< HEAD
	/*Selecciona de la base de datos la curp que se envio en los
	formularios.*/
	$curp = $_POST["curp"];
	$contra = $_POST["contra"];
	$sqlAcc = "SELECT * FROM usuario WHERE usuario='$curp' AND password='$contra'";
=======
	$sqlAcc = "SELECT * FROM alumno";
>>>>>>> 4809289930f73580b86807a029a0815a3288097e
	$resAcc = mysqli_query($conexion, $sqlAcc);
	$infAcc = mysqli_num_rows($resAcc);	

	if($infAcc >= 1){
		$_SESSION["valido"] = "sesion";
<<<<<<< HEAD
		echo 1;
		//Si es correcto regresa 1 al ajax de index.js
	}else{
		echo $sqlAcc;
=======
		$_SESSION["valido2"] = "IPN";
		echo 1;
	}else{
		echo 0;
>>>>>>> 4809289930f73580b86807a029a0815a3288097e
	}

?>