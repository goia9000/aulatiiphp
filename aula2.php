<?php
$nome = "Bruno H Goia";
$dataNascimento = "08/05/92";
$cpf = "111.111.111-11";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Aula_02_PHP</title>
    <style>
        #btnAlerta {
            border-radius: 25px;
            background-color: #FF5733;
            margin-top: 100px;
            text content: center;
            box-shadow: 1px 1px 5px #3357FF;
            border: 1px #33FF57;
            align-content: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>

    <button id="btnAlerta">Mostrar Alerta</button>
    <script>
        const btnAlerta = document.getElementById('btnAlerta');
        btnAlerta.addEventListener('click', function () {
            alert('Este é um exemplo de JavaScript');
        });
        btnAlerta.addEventListener('mouseover', function () {
            btnAlerta.style.backgroundColor = '#3357FF';
            btnAlerta.style.boxShadow = "2px 2px 10px #FF5733" // Cor ao passar o mouse
        });
        btnAlerta.addEventListener('mouseout', function () {
            btnAlerta.style.backgroundColor = '';
            btnAlerta.style.boxShadow = '';// Restaura a cor original ao remover o mouse
        });
    </script>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <h1>Ficha do Aluno</h1>
    <p>
        <strong>Nome:</strong> <?= $nome ?> <br>
        <strong>Data Nascimento:</strong> <?= $dataNascimento ?> <br>
        <strong>CPF:</strong> <?= $cpf ?>
    </p>
</body>

</html>