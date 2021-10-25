<?php
$nomes=array("Fulano","Beltrano","Sicrano", "Astrogildo","Belarmino","Juvencio");
//posições       0         1         2           3            4          5
// $nomes=array("João","Maria","Claudia","Roberto");
$total = count($nomes);//6 quantidade de valores do array
$ult = count($nomes)-1;//5
echo "Foram encontradas $total nomes no array.<br>";//6
echo "Primeiro valor do array: ".$nomes[0]."<br>";//Fulano
echo "Último valor do array: ".$nomes[$ult]."<br>";//Juvencio
echo $nomes[count($nomes)-2];//Belarmino
echo "<hr>";
for($i=0;$i<count($nomes);$i++){
 echo $nomes[$i]."<br>";
}
?>