<?php
function cozinha ($sabor, $tipo = "suco"){
    return "Fazendo um(a) $tipo de(a) $sabor.\n";
}

// echo cozinha ("torta","Manga");
echo cozinha("Manga","torta")."<br>";
echo cozinha ("Laranja");//Fazendo um(a) suco de(a) Laranja
/*
Desafio:
como arrumar a função deixando uma var argumento com valor e outra
var argumento sem valor e fazer funcionar a execução de 
cozinha("Laranja"), com a saída:
Fazendo um(a) suco de(a) Laranja
*/
?>