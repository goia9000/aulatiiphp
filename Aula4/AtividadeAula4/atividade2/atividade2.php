<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Atividade 2 - Formulário</title>
    <link rel="stylesheet" href="atividade2.css">
</head>
<body>
    <h1>Crie um formulário que capture a idade do usuário e use estruturas condicionais para erificar se a pessoa é menor de idade, adulta ou idosa, exibindo em forma de imagem a classificação</h1>

    <form action="autentication2.php" method="get">
        <fieldset>
            <legend>Qual Sua Idade?</legend>
            <label for="idade">Idade</label>
            <input type="number" name="idade"><br>
            <button id ="btnEnviar" type="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>