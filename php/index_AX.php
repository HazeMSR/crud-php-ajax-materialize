<?php
	session_start();
	include("configBD.php");
	include("getPosts.php");
	
	$sqlAcc = "SELECT * FROM alumno";
	$resAcc = mysqli_query($conexion, $sqlAcc);
	$infAcc = mysqli_num_rows($resAcc);	

	if($infAcc >= 1){
		$_SESSION["valido"] = "sesion";
		$_SESSION["valido2"] = "IPN";
		echo 1;
	}else{
		echo 0;
	}

?>