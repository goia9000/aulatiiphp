<!-- OBSERVAÇÃO:
O conteúdo da aula está em comentário para não entrar em conflito com as funções das atividades. -->

<?php
// $nome = "Bruno Goia";
// $idade = 18;
// $altura = 1.78;
// $aceitoTermo = true;
// $aceito2Termo = 1;

// echo "Nome: $nome <br>";
// echo "Idade: $idade <br>";
// echo "Altura: $altura <br>";
// echo "Termo: $aceitoTermo <br>";
// echo "Segundo Termo: $aceito2Termo <br>";

// echo "<hr>";

// //Estrutura Condicional

// $idade = 18;

// if ($idade > 15){
//     echo "Pode Votar";
// }
// else {
//     echo "Não Pode Votar";
// }

// echo "<hr>";

// //Verificar se é menor de idade, adulto ou idoso

// $idade = 25;

// if ($idade < 18){
//     echo "Menor de idade";
// }
// else if ($idade > 17 && $idade < 60){
//     echo "Adulto";
// }
// else {
//     echo "Véio";
// }

// echo "<hr>";

// // Qual a cor preferida, vermelho, azul, verde

// $cor = "vermelho";

// switch($cor){
//     case "vermelho":
//         echo "A cor favorita é vermelho";
//         break;
//     case "azul":
//         echo "A cor favorita é vermelho";
//         break;
//     case "verde":
//         echo "A cor favorita é vermelho";
//         break;
//     default:
//     echo "Nenhuma das cores foi selecionada";
// }

// echo "<hr>";

// // Imprima na tela os números de 1 a 5

// $contador = 1;

// while ($contador <= 5){
//     echo $contador . "<br>";
//     $contador++;
// }

// echo "<hr>";

// // Imprima na tela os números de 1 a 5 utilizando for

// for($contador = 1; $contador <= 5 ; $contador++){
//     echo $contador . "<br>";        
// }

// echo "<hr>";

// // funções em php

// function saudacao($nome){
//     echo "Olá $nome, Seja Bem Vindo!";
// }

// saudacao("Bruno");
?>


<?php

// Atividade 1: Declare variáveis para seu nome, idade e cidade natal, e exiba os valores usando echo.

$nome = "Bruno";
$idade = 32;
$cidade = "Marília/SP";

echo "Olá $nome, você é natural de $cidade e tem $idade anos.";

echo "<br>";
echo "<hr>";

// Atividade 2:  Declare uma variável para a idade e use estruturas condicionais para verificar se a pessoa é menor de idade, adulta ou idosa, exibindo uma mensagem apropriada.

$idade = 18;

if ($idade < 18) {
    echo "Você tem $idade anos e é menor de idade";
} elseif ($idade > 17 && $idade < 60) {
    echo "Você tem $idade anos e é adulto";
} else {
    echo "Você tem $idade anos e é véio";
}

echo "<br>";
echo "<hr>";

// Atividade 3: Use um laço for para exibir os números de 1 a 10.

for ($num = 1; $num <= 10; $num++) {
    echo "$num" . "<br>";
}

echo "<br>";
echo "<hr>";

// Atividade 4: Use um laço while para exibir os números de 1 a 5 e um laço do...while para exibir os números de 6 a 10.


$nume = 1;

while ($nume <= 5) {
    echo "$nume" . "<br>";
    $nume++;
}

$num2 = 6;

do {
    echo "$num2 <br>";
    $num2++;
}
while ($num2 <= 10);

echo "<br>";
echo "<hr>";

//Atividade 5:  Crie um algoritmo que exiba a tabuada de um numero determinado, de 1 a 10, usando um laço for.

$numero = 5;
$numero2 = 1;

for ($numero2 = 1; $numero2 <= 10; $numero2++) {
    echo "$numero x $numero2 = " . ($numero2 * $numero) . "<br>";
}

echo "<br>";
echo "<hr>";

// Atividade 6: Crie uma função que receba um nome como parâmetro e retorne uma mensagem de saudação, e chame a função com diferentes nomes para exibir as mensagens.


function saudacao($nomeAtv)
{
    echo "Olá " . $nomeAtv . ", Seja Bem Vindo! <br>";
}

saudacao("Bruno");
saudacao("Fulano");
saudacao("Ciclano");
saudacao("Beutrano");

echo "<br>";
echo "<hr>";

// Atividade 7: Crie uma função que receba a largura e a altura de um retângulo como parâmetros e retorne a área, chamando a função com diferentes valores para exibir os resultados.

function calcularArea($altura, $largura)
{
    echo "A área de $altura + $largura é de: " . ($altura * $largura) . "²";
}

calcularArea(100, 100);

echo "<br>";
echo "<hr>";

// Atividade 8: Crie uma string com seu nome completo e use funções de manipulação de strings para exibir o nome em letras maiúsculas, minúsculas e apenas a primeira letra de cada palavra em maiúsculas.

$nomeAtv8;

function nomeMaiusculo($nomeAtv8)
{
    echo strtoupper($nomeAtv8) . "<br>";
}


nomeMaiusculo("bruno");

function nomeMinusculo($nomeAtv8)
{
    echo strtolower($nomeAtv8) . "<br>";
}

nomeMinusculo("BRUNO");

function nomePrimMaiusc($nomeAtv8)
{
    echo ucfirst(strtolower($nomeAtv8)) . "<br>";
}

nomePrimMaiusc("brUnO");

echo "<br>";
echo "<hr>";

// Atividade 9: Declare variáveis para armazenar as notas de três disciplinas diferentes. Em seguida, crie uma função que calcule a média das três notas e exiba o resultado.

$nota1;
$nota2;
$nota3;

function calcMedia($nota1, $nota2, $nota3)
{
    echo "A média das notas é: " . ($nota1 + $nota2 + $nota3) / 3;
}

calcMedia(10, 10, 10);

echo "<br>";
echo "<hr>";

// Atividade 10: Crie uma função que receba um número como parâmetro e retorne se o número é par ou ímpar. Chame a função com diferentes números e exiba os resultados. 

$parImpar;
function parImpar($parImpar)
{
    if ($parImpar % 2 == 0) {
        return "O número $parImpar é par.";
    } else {
        return "O número $parImpar é ímpar.";
    }
}

echo parImpar(7) . "<br>";
echo parImpar(10) . "<br>";
echo parImpar(15) . "<br>";
echo parImpar(22) . "<br>";

echo "<br>";
echo "<hr>";