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
$hoje=date("d/m/Y");

include "con_pdo.php";
try {
    $sql=" select id, login, email, date_format(data,'%d/%m/%Y') as data, obs from usuario";
    $sth = $conn->prepare($sql);
    $sth->execute();
}
catch(PDOException $e) {
    echo  "<br>" . $e->getMessage();
}

//Página HTML
$html = <<<HTML
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<style>
    h1{
        color: darkblue;
    }
    table, td, th {
        border: 1px solid black;
    }
    td {
        text-align: center;
    }
    th{
        color: darkblue;
    }
    table{
        width:  500px;
        border-collapse: collapse;
          margin:auto;
    }
</style>
</head>
<body>
    $img
    <h1>Relatório PHP - PDF - PDO - $hoje</h1>
      <table  id="tabela">
    <thead>
      <tr>
        <th>id</th>
        <th>Login</th>
        <th>E-mail</th>
    <th>Data</th>
    <th>Obs</th>
      </tr>
    </thead>
    <tbody>
HTML;
while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
  $html.= "<tr>";    
  $html.= "<td>".$row["id"]."</td>";
  $html.= "<td>".$row["login"]."</td>";
  $html.= "<td>".$row["email"]."</td>";
  $html.= "<td>".$row["data"]."</td>";
  $html.= "<td>".$row["obs"]."</td>";
  $html.= "</tr>";
}
$html.="</tbody></table>";

$dompdf->loadHtml($html);

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


?>