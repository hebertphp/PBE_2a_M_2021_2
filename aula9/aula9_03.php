<?php
function media3($valor1, $valor2, $valor3) {
    $total = ($valor1 + $valor2 + $valor3)/3;

    return number_format($total, 2, ',', '.');
}

echo media3(10,5,8)."<hr>";

$x=media3(10,4,7);
echo $x;
?>