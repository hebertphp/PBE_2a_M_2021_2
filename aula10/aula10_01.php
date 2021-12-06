<?php
setcookie("teste", "funciona?");
setcookie("apagar", "vou sumir!!",time()+20);//20segs
setcookie("usuario", "Eu Mesmo",time()+60*60);//1h
echo "Cookies criados!<br>";
?>
<script>
document.cookie = "js_cookie=Javascript";
</script>