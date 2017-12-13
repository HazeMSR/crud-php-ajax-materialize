<?php
	include("configBD.php");
	include("getPosts.php");
	
	$sqlIns = "INSERT INTO alumno VALUES('$curp','$ingreso','$carrera','$plan','$especialidad','$semestre','$creditos','$creditosI','$promedio','$turno','$genero','$edad','$fecha','$telefono')";
	$resIns = mysqli_query($conexion, $sqlIns);
	$infIns = mysqli_affected_rows($conexion);
	if($infIns == 1){
		echo 1; //OK. Se realizó el registro del estudiante
	}else{
		echo 0; //ERROR. No se pudo realizar el registro del estudiante
	}
?>