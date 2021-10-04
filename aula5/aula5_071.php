<?php
// $destino="New York";
$destino=isset($_GET["destino"])?$_GET["destino"]:"";
switch ($destino) {
 case "São Paulo":
   echo 'Seja bem vindo a cidade que nunca para!';
 break;
 case "New York":
   echo 'Seja bem vindo a Big Apple!';
 break;
 case "Paris":
   echo 'Seja bem vindo a cidade Luz!';
 break;
 default:
   echo 'Não encontramos seu destino!';
}
/*
aula5_071.php?destino=São Paulo
*/
?>