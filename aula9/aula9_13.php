<?php
function fatorial($num){
    if($num <= 1){
        return $num;
    }    
    else
        return $num * fatorial($num - 1);
}
echo fatorial(4);
// !1=1
// !2=2*1
// !3=3*2*1
// !4=4*3*2*1
?>