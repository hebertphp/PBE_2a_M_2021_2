<?php
// Rereferencia Dompdf -  namespace
use Dompdf\Dompdf;

//carrega a biblioteca dompdf
require_once "dompdf/autoload.inc.php";

// Instanciar a classe dompdf
$dompdf = new Dompdf();

//Conteúdo HTML

$data = file_get_contents("pg1.php");

$dompdf->loadHtml($data);

// (Opcional) Tamanho e orientação do papel.
$ori='portrait';//portrait //landscape
$dompdf->setPaper('A4', $ori);

// Rendereiza a página HTML para PDF
$dompdf->render();

// Gera a saída do documento

$dompdf->stream(
	"relatorio.pdf",//nome do arquivo PDF que será gerado
	array("Attachment"=>false)	
);

//echo $html;
?>