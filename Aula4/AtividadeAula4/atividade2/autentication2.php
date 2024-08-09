<?php

$imagem1 = '<img src="/Aula4/AtividadeAula4/download.png">';
$imagem2 = '<img src="/Aula4/AtividadeAula4/adulto.png">';
$imagem3 = '<img src="/Aula4/AtividadeAula4/idoso.png">';

echo "<h1>Dados do Formulário</h1>";


if ($_GET['idade'] < 18){
    echo "Você tem ".$_GET['idade']." anos e é menor de idade" . $imagem1;
}
else if ($_GET['idade'] < 60){
    echo "Você tem ".$_GET['idade']." anos e é maior de idade" . $imagem2;
}
else {
    echo "Você tem " .$_GET['idade']. " anos e é idoso. " . $imagem3;
}
echo "Idade: ". $_GET['idade']; 
;