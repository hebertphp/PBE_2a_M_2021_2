<?php
function total(...$num) {
    $soma = 0;
    foreach($num as $pos=>$valor) {
        if(is_numeric($valor))
            $soma += $valor;
    }
    return $soma;
}
echo total("teste",5,7);
?>