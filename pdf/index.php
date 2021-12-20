<?php
foreach (glob("*.php") as $arquivo) {
if($arquivo!="index.php")
echo "<a href='$arquivo'>$arquivo</a><br>"; 
} 
?>