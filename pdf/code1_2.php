<?php
// Rereferencia Dompdf -  namespace
use Dompdf\Dompdf;

require_once "dompdf/autoload.inc.php";

// Instanciar a classe dompdf
$dompdf = new Dompdf();

$path = 'uninove.jpg';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
$img="<img src='$base64'>";
$nome="Hebert";
$hoje=date("d/m/Y");

//Página HTML
$html = <<<HTML
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <style>
    h1{
        color: blue;
    }
    .quebra{
        page-break-before: always;
    }
    a{
        text-decoration: none;
    }
    </style>
</head>
<body>
<div>
    $img
    <h1>Relatório PHP - PDF11 - $hoje</h1>
    <p>Primerio parágrafo do relatório para $nome - página1</p>
    <a href="https://github.com/dompdf/dompdf">DOMPDF</a>
</div>
<div class="quebra" >
    <h1>Relatório PHP - PDF</h1>	
    <p>Primerio parágrafo do relatório para $nome - página2</p>
</div>
<div class="quebra" >
    <h1>Relatório PHP - PDF</h1>    
    <p>Primerio parágrafo do relatório para $nome - página3</p>
</div>
</body>
</html>
HTML;


$dompdf->loadHtml($html);

// (Opcional) Tamanho e orientação do papel.
$dompdf->setPaper('A4', 'landscape');

// Rendereiza a página HTML para PDF
$dompdf->render();

// Gera a saída do documento
$dompdf->stream(
	"relatorio.pdf",//nome do arquivo PDF que será gerado
	array("Attachment"=>false)	
);


?>