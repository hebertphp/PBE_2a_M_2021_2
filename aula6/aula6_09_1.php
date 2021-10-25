<?php
$usuario = array(
 "login" => "admin",
 "senha" => "1234",
 "email" => "teste@teste.com"
);
foreach ($usuario as $pos => $valor) {
//  echo $pos . " - " . $valor . "<br/>";
// echo $valor." ";
echo $pos." ";
}

echo "<hr>";

$uf = array("SP","RJ","MG","ES","RS","SC","PB","PR","BA","DF","SE");
foreach ($uf as $pos =>$valor){
 echo $pos . " ";
}



// comentário em PHP nos editores de código atalho--> [Ctrl][;] Ctrl + ;
?>
<!-- comentário em HTML -->
