<?php
ob_start();

require ('index.php');
$html = ob_get_clean();
require 'vendor/autoload.php';
use dompdf\dompdf;

$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isPemoteEnabled'=>true));
$dompdf->setOptions($options);

$dompdf -> loadHtml($html);
$dompdf ->setPaper('latter');
$dompdf ->render();
$dompdf ->stream("pdf",array('attachment'=>false));

?>
