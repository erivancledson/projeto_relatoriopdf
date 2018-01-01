<?php

ob_start();
?>

   <h1>Olá</h1>

<h4>subtitulo</h4>
        
 <?php
$html = ob_get_contents();
ob_end_clean();

require 'vendor/autoload.php';

$mpdf = new mPDF();
$mpdf->WriteHTML($html);
//nome do arquivo gerando em pdf
$mpdf->Output('arquivo.pdf', 'D');

// I = abra no browser
// D =  faz o download
// F = Salva no servidor
