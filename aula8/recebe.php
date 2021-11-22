<?php
echo $_SERVER["REQUEST_METHOD"];
if($_SERVER["REQUEST_METHOD"]=="GET"){
    echo "<h1>Acesso Negado!</h1>";

}

echo "<hr><pre>";print_r($GLOBALS);echo "</pre>";
?>