<?php 
    $nome = "Bruno Goia";
    $idade = 18;
    $altura = 1.78;
    $aceitoTermo = true;
    $aceito2Termo = 1;

    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "Altura: $altura <br>";
    echo "Termo: $aceitoTermo <br>";
    echo "Segundo Termo: $aceito2Termo <br>";

    echo "<hr>";

    //Estrutura Condicional

    $idade = 18;

    if ($idade > 15){
        echo "Pode Votar";
    }
    else {
        echo "Não Pode Votar";
    }

    echo "<hr>";

    //Verificar se é menor de idade, adulto ou idoso

    $idade = 25;

    if ($idade < 18){
        echo "Menor de idade";
    }
    else if ($idade > 17 && $idade < 60){
        echo "Adulto";
    }
    else {
        echo "Véio";
    }

    echo "<hr>";

    // Qual a cor preferida, vermelho, azul, verde

    $cor = "vermelho";

    switch($cor){
        case "vermelho":
            echo "A cor favorita é vermelho";
            break;
        case "azul":
            echo "A cor favorita é vermelho";
            break;
        case "verde":
            echo "A cor favorita é vermelho";
            break;
        default:
        echo "Nenhuma das cores foi selecionada";
    }

    echo "<hr>";

    // Imprima na tela os números de 1 a 5

    $contador = 1;

    while ($contador <= 5){
        echo $contador . "<br>";
        $contador++;
    }

    echo "<hr>";

    // Imprima na tela os números de 1 a 5 utilizando for

    for($contador = 1; $contador <= 5 ; $contador++){
        echo $contador . "<br>";        
    }

    echo "<hr>";

    // funções em php

    function saudacao($nome){
        echo "Olá $nome, Seja Bem Vindo!";
    }

    saudacao("Bruno");