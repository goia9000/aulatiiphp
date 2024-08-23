<?php

echo "<h1>Olá Mundo! Hoje será array em PHP</h1>";

echo "<h4>Array Unidimensional</h4>";


//dois modos para declarar array
// $frutas = array();
$frutas = ["Banana", "Maça", "Uva", "Laranja", "Tomate"];


echo $frutas;

var_dump($frutas);
echo "<hr>";
// print_r($frutas);

echo "<pre>";
print_r($frutas);
echo "</pre>";

echo "<hr>";

echo $frutas [2];

echo "<hr>";
echo "<hr>";
echo "<h4>Array Associativo</h4>";

$mercadoria = [
    258 => "Arroz", 
    369 => "Feijão",
    147 => "Cenoura",
];

$estados = [
    "SP" => "São Paulo",
    "RJ" => "Rio de Janeiro",
    "MG" => "Minas Gerais",
    "SC" => "Santa Catarina",
    "PR" => "Paraná",
];

echo "<hr>";

echo $mercadoria [369];
echo "<br>";
echo $estados ["RJ"];
echo "<hr>";
echo "<hr>";
echo "<h4>Array MultiDimensional</h4>";

$feira = [
    "Frutas" => [
        99 => "Banana",
        25 => "Maça",
        36 => "Uva",
        2 => "Morango",
        "Manga",
    ],
    "Verduras" => [
        "Alface", 
        "Repolho",
        "Cenoura",
    ],
];

var_dump($feira);

echo $feira ['Frutas'] [36];
echo "<br>";
echo $feira ['Frutas'] [100];
echo "<br>";
echo $feira ['Verduras'] [1];