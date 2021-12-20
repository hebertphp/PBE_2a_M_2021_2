<?php
// Rereferencia Dompdf -  namespace
use Dompdf\Dompdf;

//carrega a biblioteca dompdf
require_once "dompdf/autoload.inc.php";

// Instanciar a classe dompdf
$dompdf = new Dompdf();

//Conteúdo HTML
$nome="Hebert";
$hoje=date("d/m/Y");
$html ="
<h1>Relatório PHP - PDF</h1>
<h2>$hoje</h2>
<p>Primerio parágrafo do relatório para $nome</p>
";

//Carrega o conteúdo HTML
$dompdf->loadHtml($html);

// (Opcional) Tamanho e orientação do papel.
$ori='portrait';//portrait //landscape
$dompdf->setPaper('A4', $ori);

// Rendereiza a página HTML para PDF
$dompdf->render();

// Gera a saída do documento
$arquivo='relatorio.pdf';//nome do arquivo PDF que será gerado
$dompdf->stream($arquivo,
	array("Attachment"=>false)//true	
);
?>