<?php
// echo "<h1>Dados do Formulário</h1>";
// echo "E-mail: ". $_GET['email']; // Get é um método universal para coletar informações
// echo "<br>";
// echo "Senha: ". $_GET['senha'];
// echo "<br>";
// echo "Lembrar-me: ". $_GET['lembrarme'];

echo "<h1>Dados do Formulário</h1>";
echo "E-mail: ". $_POST['email']; // Get é um método universal para coletar informações
echo "<br>";
echo "Senha: ". $_POST['senha'];
echo "<br>";
echo "Lembrar-me: ". $_POST['lembrarme'];