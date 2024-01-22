<?php
require_once 'vendor/autoload.php';
require_once '';
$mpdf = new Mpdf\Mpdf();
$css = file_get_contents("index.css");

$plantilla = getPlantilla();
$mpdf ->writeHTML($css,\Mpdf\HTMLparserMode ::HEADER_CSS);
$mpdf ->writeHTML($plantilla,\Mpdf\HTMLparserMode ::HTML_BODY);

$mpdf -> output("miarchivopdf","I");

?>
