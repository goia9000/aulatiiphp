<!DOCTYPE html>
<html>
<head>
    <title>Aula 4 - Formulário de Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="aula4.css">
</head>
<body>
    <div id="geralForm">
        <form action="autenticacao.php" method="post"> <!-- formulario de pesquisa e filtros utilizar get--> 
            <fieldset name="login">
                <legend>Login</legend>
                <label for="email" name="email" id="email">E-mail</label> <br>
                <input type="email" id="email" name="email" required placeholder="Insira seu E-mail"><br>
                <label for="password" name="senha" id="senha">Senha</label> <br>
                <input type="password" name="senha" id="senha" required placeholder="Insira sua Senha"> <br><br>
                <input type="checkbox" name="lembrarme" value="lembrarme">
                <label for="checkbox">lembrar-me</label><br>
                     <div id="btnId">
                          <button id="btnEnviar" type="submit">Enviar</button>
                     </div>
            </fieldset>
        </form>
    </div>
</body>
</html>