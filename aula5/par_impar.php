<?php
$num=isset($_GET["num"])?$_GET["num"]:0;

// echo "Teste, num = $num";//par_impar.php?num=28
$resto = $num % 2;
if($resto == 0){
    echo "O número $num é par!";
}
else{
    echo "O número $num é impar!";
}
/*
Elaborar um código para verificar se um número inteiro
é par ou ímpar, o sódigo deverá mostrar o número e na
frente do número, PAR ou ímpar.
Exemplo: 28 - PAR
         275 - ÍMPAR
 5  % 2 = 1 - ÍMPAR
 18 % 2 = 0 - PAR         
*/
?>