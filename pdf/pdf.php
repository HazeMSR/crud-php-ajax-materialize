<?php
	
	require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'watermarkImgBehind' => true]);

// Setting transparency to 1, and exact positioning, you can use a Watermark Image 
// as a 'Header'. Note that the page top-margin is set to accomodate the image.
$mpdf->SetWatermarkImage(
    'b.jpg', 
    1, 
    array(200,500), 
    array(0,0)
);

$mpdf->showWatermarkImage = true;
$estilos = file_get_contents("css/pdf.css");
$mpdf -> WriteHTML($estilos, 1);
$mpdf->WriteHTML('Hello World');
	$mpdf->Output();


	/*$conexion = mysqli_connect("localhost","root","","sem20181");
	mysqli_set_charset($conexion, "utf8");
	$sql = "SELECT * FROM estudiantes";
	$res = mysqli_query($conexion, $sql);*/
	
	//$estilos = "<style>*{font.family:'Verdana';}</style>";
	
	/*$html = "<h1>;
	while($filas = mysqli_fetch_array($res,MYSQLI_BOTH)){
		$html = "<p style='background-color:#069; color:#FFF;'>$filas[0] - $filas[1]</p>";
		$mpdf -> WriteHTML($html);
		$mpdf->AddPage();
	}
	$mpdf -> WriteHTML($html);
    $mpdf -> Output();    */
?>