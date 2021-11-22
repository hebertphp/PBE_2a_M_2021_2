<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <pre>
    <form action="recebe.php" method="post" autocomplete="off">
        Nome  <input type="text" name="nome" required autofocus>

        Senha <input type="password" name="senha" required>
              <input type="hidden" name="oculto" value="Um valor">  

        RA    <input type="number" name="ra" required>      

        Selecione o sistema operacional

        Windows <input type="checkbox" name="windows" value="windows">
        Linux   <input type="checkbox" name="linux" value="linux">
        MacOS   <input type="checkbox" name="macos" value="macos">
        Android <input type="checkbox" name="android" value="android">


                <input type="submit"> <input type="reset">
    </form>
    </pre>
</body>
</html>