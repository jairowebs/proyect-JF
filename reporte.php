<?php

require 'vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(); // Crea una nueva instancia de la clase Mpdf

$html = '<h1>Hello world!</h1>'; // Contenido HTML para el PDF

$mpdf->WriteHTML($html); // Utiliza la instancia para escribir el contenido HTML

$mpdf->Output(); // Genera la salida del PDF
?>


//require 'fpdf186/fpdf.php';



//$pdf = new FPDF();
//$pdf->AddPage();
//$pdf->SetFont('Arial','B',16);

//$pdf->Output();
?>
