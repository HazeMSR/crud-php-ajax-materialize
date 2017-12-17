<?php
	
	require_once __DIR__ . '/../pdf/autoload.php';


$mpdf = new \Mpdf\Mpdf([

	'mode' => 'utf-8',
	'format' => 'A4-L',
	'watermarkImgBehind' => true]);

// Setting transparency to 1, and exact positioning, you can use a Watermark Image 
// as a 'Header'. Note that the page top-margin is set to accomodate the image.
$mpdf->SetWatermarkImage(
    '../img/b.jpg', 
    1, 
    array(200,500), 
    array(0,0)
);
$usuario="Usuario";
$evento="La graduacion";
$lugar="ESCOM";
$fecha="2017-09-08";
$hora="10:00:00";
$htmlCont="<table><tr>
	<th>¡$usuario 
	<br>estás invitado a
	<br>$evento!</th >
	<th>Presenta este codigo
	<br>para poder ingresar:
	</th>
	</tr>
	<tr><td><br></td><td><br></td></tr>
	<tr><td><br></td><td><br></td></tr>
	<tr>
	<td><strong><div id='fuerte'>
	<p align='center'>El evento tiene lugar en:</p>
	<br><p align='center'>$lugar</p>
	<br><br><p align='center'>El día:</p></div>
	<div id='debil'>
	<br><p align='center'>$fecha</p>
	<br><br><p align='center'>Y empezará a:</p>
	<br>$hora</div></strong>
	</td>
	<td><img src='https://api.qrserver.com/v1/create-qr-code/?size=150x150&amp;data=$usuario'></td>
	<tr><td ></td><td id='foot'>¡NO FALTES!</td></tr>
	</tr>
	</table>";
	$mpdf->showWatermarkImage = true;
	$estilos = file_get_contents("../css/pdf.css");
	$mpdf -> WriteHTML($estilos, 1);
	$mpdf->WriteHTML($htmlCont);
	$mpdf->Output();


?>