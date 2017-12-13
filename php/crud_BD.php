<?php
	include("configBD.php");
	
	$sqlEst = "SELECT * FROM alumno";
	$resEst = mysqli_query($conexion, $sqlEst);
	
	$regEst = "";
	$a=0;
	while($filas = mysqli_fetch_array($resEst,MYSQLI_BOTH)){
		$regEst .= "
		<tr>
			<td>$filas[0]</td>
			<td>$filas[1] </td>
			<td>
				<i class='fa fa-close eliminar' data-eliminar='$filas[0]'></i>
				<i class='fa fa-pencil editar' data-editar='$filas[0]'></i>
				<i class='fa fa-eye ver' data-ver='$filas[0]'></i>
			</td>
		</tr>
		";
		$a+=1;
	}
	
?>