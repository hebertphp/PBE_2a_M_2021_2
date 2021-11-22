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

        Windows <input type="checkbox" name="windows" value="windows" checked>
        Linux   <input type="checkbox" name="linux" value="linux">
        MacOS   <input type="checkbox" name="macos" value="macos">
        Android <input type="checkbox" name="android" value="android">

        Você está conectado na rede 4G nesse momento?
        Sim <input type="radio" name="rede4g" value="sim">
        Não <input type="radio" name="rede4g" value="não">

        Selecione o UF <select name="uf">
                        <option>SP</option>
                        <option>RJ</option>
                        </select>

            <input type="submit"> <input type="reset">
    </form>
    </pre>
</body>
</html>