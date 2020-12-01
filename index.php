<?php

use Dompdf\Dompdf;
use Dompdf\Options;

 require __DIR__ . "/vendor/autoload.php";

 $dompdf = new Dompdf(["enable_remote" => true]);
 $dompdf->loadHtml("<h1>Acesse Cartório</h1><p>Uma empresa focada em criar soluções para cartórios</p>");

 ob_start();
 require  __DIR__ . "/contents/user.php";
 $dompdf->loadHtml(ob_get_clean());

 $dompdf->setPaper("A4", "portrait");
 $dompdf->render();
 $dompdf->stream("file.pdf", ["Attachment" => false]);