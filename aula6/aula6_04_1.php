<?php


$aluno["curso"] = "TADS";
$aluno["nome"] = "Fulano";
$aluno["ra"] = 123456789;
$aluno[]="E agora?";//[0]
$aluno=array();
echo "<pre>";print_r($aluno);echo "</pre>";

echo "<hr>Nome: ".$aluno["nome"];
echo "<br>Ra: ".$aluno["ra"];
echo "<br>Curso: ".$aluno["curso"];
?>
