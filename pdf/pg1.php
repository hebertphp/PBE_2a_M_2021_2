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
    </style>
</head>
<body>
<div>
    <img src="./uninove.jpg">
    <h1>Relatório PHP - PDF</h1>
    <p>Primerio parágrafo do relatório  - página1</p>
</div>
<div class="quebra" >
    <h1>Relatório PHP - PDF</h1>    
    <p>Primerio parágrafo do relatório  - página2</p>
</div>
<div class="quebra" >
    <h1>Relatório PHP - PDF</h1>    
    <p>Primerio parágrafo do relatório  - página3</p>
</div>
</body>
</html>