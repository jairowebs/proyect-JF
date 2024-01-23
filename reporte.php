<?php
ob_start();
require 'index.php';
$html = ob_get_clean();

require 'vendor/autoload.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;

// Instantiate and use the dompdf class
$dompdf = new Dompdf();

// Set paper size to "oficio" (8.5 x 13 inches)
$dompdf->setPaper([0, 0, 612, 936], 'portrait');

$dompdf->loadHtml($html);

try {
    // Try to render and generate the PDF
    $dompdf->render();
    
    // Output the generated PDF to the browser
    $dompdf->stream();
} catch (Exception $e) {
    // Handle the exception (e.g., display an error message)
    echo 'Error generating PDF: ', $e->getMessage();
}
?>


