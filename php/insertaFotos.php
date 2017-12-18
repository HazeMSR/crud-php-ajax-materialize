<?php
	include("configBD.php");
	include("getPosts.php");

	$file = $_POST["file"];
	echo $file;
	$alumno = $_SESSION["usuario"];

	$sqlEst = "SELECT * FROM alumno WHERE usuario='$usuario'";
	$resEst = mysqli_query($conexion, $sqlEst);
	$filasA = mysqli_fetch_array($resEst,MYSQLI_BOTH);

	$evento= "Excelencia2017_2";

	$sqlIns = "INSERT INTO alumno (link,alumno,evento) VALUES ('$file','$filasA[0]','$evento')";

	$resIns = mysqli_query($conexion, $sqlIns);
	$infIns = mysqli_affected_rows($conexion);

	
?>