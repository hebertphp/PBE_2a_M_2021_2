<?php
$nome="hebert";
$agora = date('d/m/Y H:i');
$html = <<<HTML
<!DOCTYPE html>
<html lang="pt-br">
<body>
<div>
<h1>Relatório PHP - PDF - $agora</h1>
	<p>Primerio parágrafo do relatório para $nome - página1</p>
	<a href="https://github.com/dompdf/dompdf">DOMPDF</a>
</div>
<div style="page-break-before: always;">
    <h1>Relatório PHP - PDF</h1>	
	<p>Primerio parágrafo do relatório para $nome - página2</p>
</div>
<div style="page-break-before: always;">
    <h1>Relatório PHP - PDF</h1>	
	<p>Primerio parágrafo do relatório para $nome - página3</p>
</div>
    </body>
</html>
HTML;
use Dompdf\Dompdf;

require_once "dompdf/autoload.inc.php";
 
  $dompdf = new DOMPDF();
  $dompdf->load_html($html);
  $dompdf->set_base_path("/");
  $dompdf->set_paper("A4");
  $pdf = $dompdf->render();
  $canvas = $dompdf->get_canvas(); 
  $font = "";
  $canvas->page_text(510, 18, "Pág. {PAGE_NUM}/{PAGE_COUNT}", $font, 10, array(0,0,0)); //header
  $canvas->page_text(250, 792, "Copyright © 2021 - Prof. Hebert", $font, 10, array(0,0,0)); //footer
  //header("Content-type: application/pdf");     
  //echo $dompdf->output();
$dompdf->stream(
	"relatorio.pdf",//nome do arquivo PDF que será gerado
	array("Attachment"=>false)	
);
?>