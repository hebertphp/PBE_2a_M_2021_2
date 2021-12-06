<?php
function recursiva($a){
    if ($a <= 10) {
        echo $a." ";
        recursiva($a+1);
    }
}
recursiva(5);

/*
Saída:
5 6 7 8 9 10
*/
?>