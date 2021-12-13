<?php
function mensagem($string){
    $string .= ' e alguma coisa mais.';
}
$str = 'Isto é uma string,';
mensagem($str);
echo $str;
?>