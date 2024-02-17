<?php

use Dompdf\Dompdf;
use Dompdf\Options;

require_once("pdf/dompdf/autoload.inc.php");
require_once("class/bd.php");


ob_start();

require_once("impressionPage.php");
$html = ob_get_contents();

ob_end_clean();

$options = new Options();

$dompdf = new Dompdf($options);

$dompdf->loadHTML($html);

$dompdf->setPaper("A4", "portrait");

$fichier = "Note de Frais.pdf";

$dompdf->render();

$dompdf->stream($fichier);

