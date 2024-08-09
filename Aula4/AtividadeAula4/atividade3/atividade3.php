<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tabuada</title>
    <link rel="stylesheet" href="atividade3.css">
</head>

<body>
    <h1>Crie um formulário que capture a tabuada solicitada do usuário e exiba a tabuada na tela em HTML</h1>

    <form action="autentication3.php" method="get">
        <fieldset>
            <legend>Qual tabuada quer ver?</legend>
            <label for="tabuada">Tabuada do:</label>
            <input type="number" name="tabuada" id="tabuada"><br>
            <button id="btnEnviar">Enviar</button>
        </fieldset>
    </form>
</body>

</html>