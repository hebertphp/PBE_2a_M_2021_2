<?php
//$a=6;$b=5;
$a=isset($_GET["a"])?$_GET["a"]:0;
$b=isset($_GET["b"])?$_GET["b"]:0;
if ($a == $b) {
  echo 'A variável $a='.$a.' é igual a variável $b='.$b;
}
elseif ($a < $b){
  echo 'A variável $a='.$a.' é menor que a variável $b='.$b;
}
else{
  echo 'A variável $a='.$a.' é maior que a variável $b='.$b;
}
/*
aula5_061.php?a=3&b=30
*/
?>