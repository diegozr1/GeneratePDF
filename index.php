<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



	<?php
header('Content-Type: text/html; charset=utf-8');

require('fpdf.php');

if(isset($_GET["juas"])){
	$algo = $_GET["juas"];
}

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,100,$algo);
$pdf->Output();
?>
</body>
</html>
