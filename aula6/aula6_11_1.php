<?php
$nomes=array("Fulano","Beltrano","Sicrano","Beltrano");
echo count($nomes)."<br>";//
$resultado=array_unique($nomes);
echo count($nomes)."<br>";//
foreach($resultado as $pos=>$valor){
 echo "Nomes[$pos]: " . $valor;
 echo "<br>";
}
?>
