<?php
//             0         1          2
$nome1=array("Fulano","Beltrano","Sicrano","Abelardo");
$nome2=array("Fulano","Beltrano","Sicrano","Abelardo");
$nome3=array("Fulano","Beltrano","Sicrano","Abelardo");
$nome4=array("Fulano","Beltrano","Sicrano","Abelardo");
echo "<pre>";print_r($nome1);echo "</pre>";
echo "<hr>";
asort($nome1);
echo "<h3>asort</h3>";
echo "<pre>";print_r($nome1);echo "</pre>";
sort($nome2);
echo "<h3>sort</h3>";
echo "<pre>";print_r($nome2);echo "</pre>";
arsort($nome3);
echo "<h3>arsort</h3>";
echo "<pre>";print_r($nome3);echo "</pre>";
krsort($nome4);
echo "<h3>krsort</h3>";
echo "<pre>";print_r($nome4);echo "</pre>";
?>