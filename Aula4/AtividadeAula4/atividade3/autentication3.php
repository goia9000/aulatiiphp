<?php     

$contador = 0;

echo "O Número escolhido foi ".$_GET['tabuada'].", A tabuada do ".$_GET['tabuada']." é: <br><br>";

while ($contador <= 10) {
echo $contador."x".$_GET['tabuada']."=".($contador*$_GET['tabuada'])."<br>" ;
$contador++;
}
?>