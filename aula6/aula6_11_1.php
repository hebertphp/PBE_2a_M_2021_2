<?php
$nomes=array("Fulano","Beltrano","Sicrano","Beltrano","Sicrano");
echo count($nomes)."<br>";//5
$resultado=array_unique($nomes);
echo count($resultado)."<br>";//3
foreach($resultado as $pos=>$valor){
 echo "Nomes[$pos]: " . $valor;
 echo "<br>";
}
?>
