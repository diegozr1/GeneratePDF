<?php
	

	require('fpdf.php');

	if(isset($_GET["juas"])){
		$algo = $_GET["juas"];
	}

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(20,100,$algo);
	$pdf->Output();
?>
