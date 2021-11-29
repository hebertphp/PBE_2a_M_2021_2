<?php
function boas_vindas() {
    $quem=isset($GLOBALS["alguem"])?$GLOBALS["alguem"]:"você mesmo";
    echo "<h1>Seja bem vindo(a), $quem!</h1>";
}
// $alguem="Roberta";

boas_vindas();
?>