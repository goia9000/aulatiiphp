<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Atividade 1 - Formulário</title>
    <link rel="stylesheet" href="atividade1.css">
</head>
<body>
    <h1>Crie um formulário que capture os dados do nome, idade e cidade natal e exiba os valores em um outro arquivo php</h1>

    <form action="autentication.php" method="post">
        <fieldset>
            <legend>Insira Seus Dados</legend>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome"><br>
            <label for="idade">Idade</label>
            <input type="number" name="idade" id="idade"><br>
            <label for="cidadeNatal">Cidade Natal</label> 
            <input type="text" name="cidadeNatal" id="cidadeNatal"><br><br>
                <div id="btnEnviar">
                    <button id="btnEnviar" type="submit">Enviar</button>
                </div>
        </fieldset>
    </form>
</body>
</html>