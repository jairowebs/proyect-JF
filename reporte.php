<?php



require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();



//require 'fpdf186/fpdf.php';



//$pdf = new FPDF();
//$pdf->AddPage();
//$pdf->SetFont('Arial','B',16);

//$pdf->Output();
?>
