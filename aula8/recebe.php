<?php
// echo $_SERVER["REQUEST_METHOD"];
if($_SERVER["REQUEST_METHOD"]=="GET"){
    echo "<h1>Acesso Negado!</h1>";
    exit;
}

echo "<pre>";print_r($GLOBALS);echo "</pre>";
$nome=$_POST["nome"];
$senha=$_POST["senha"];
$ra=$_POST["ra"];

echo "Nome: $nome<br>";
echo "Ra: $ra<br>";
echo "Obs: ".$_POST["obs"];
?>