<?php
	include("configBD.php");
	include("getPosts.php");
	
	$sqlUpd = "UPDATE alumno SET ingreso='$ingreso', carrera='$carrera', plan='$plan', especialidad='$especialidad' , semestre='$semestre' , creditos='$creditos' , creditosinscritos='$creditosinscritos' , promedio='$promedio' , turno='$turno' , genero='$genero' , edad='$edad', telefono='$telefono' , movil='$movil' , email='$email' WHERE curp='$curp'";
	
	$resUpd = mysqli_query($conexion, $sqlUpd);
	$infUpd = mysqli_affected_rows($conexion);
	if($infUpd == 1){
		echo 1; //OK. Se realizó la actualización del registro
	}else{
		echo $sqlUpd; //ERROR. No se pudo realizar la actualización
	}
?>