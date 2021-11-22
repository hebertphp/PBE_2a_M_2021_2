<?php

if($_SERVER["REQUEST_METHOD"]=="GET"){
    echo "<h1>Tentou acessar direto!!!</h1>";
    exit;
}

$txt_nome=(isset($_POST['txt_nome']))?$_POST['txt_nome']:"não tem nada aqui!";
$txt_email=(isset($_POST['txt_email']))?$_POST['txt_email']:"não tem nada aqui!";

// echo "<pre>";print_r($_POST);echo "</pre>";

echo "Os dados enviados pelo formulario foram:<br><br>";
echo "Nome: " . $txt_nome . "<br>";
echo "E-mail: " . $txt_email . "<br>";
?>
