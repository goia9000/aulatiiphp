<?php
$nome = "Bruno H. Goia";
$cpf = "111.111.111-11";
$rg = "22.222.222-x";
$endereco = "Logo ali nº 123";
$bairro = "Centro";
$cidade = "Marília-SP";
$autorizado = "Maria das Dores";
$cpfAutorizado = "222.222.222-22";
$rgAutorizado = "11.111.111-x";
$requerimento = "1234567";

function listaPesquisa($nomeFuncao, $descricao, $sintaxe, $exemplo)
{
    echo "<ul>
                <li><strong>Nome da Função:</strong> $nomeFuncao</li>
                <li><strong>Descrição:</strong> $descricao</li>
                <li><strong>Sintaxe:</strong> $sintaxe</li>
                <li><strong>Exemplo de uso:</strong> $exemplo</li>
                </ul><br>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Atividade 1 php</title>
</head>

<body>
    <p>Eu, <strong><?= strtoupper($nome) ?></strong>, inscrito (a) no CPF sob o nº <strong><?= $cpf ?></strong> e no RG nº
        <strong><?= $rg ?></strong>, residente e domiciliado (a) à rua: <strong><?= $endereco ?>,
            <?= $bairro ?>, <?= $cidade ?></strong>, autorizo o (a) Sr(a).
        <strong><?= strtoupper($autorizado) ?></strong>, inscrito (a) no CPF sob o nº
        <strong><?= $cpfAutorizado ?></strong>, e no RG nº <strong><?= $rgAutorizado ?></strong>, a retirar em meu nome os
        documentos previamente solicitados por meio do requerimento nº <strong><?= $requerimento ?></strong>
    </p>

    <hr>
    <?php
    listaPesquisa("strlen", "Retorna o tamanho de uma string (número de caracteres)", "strlen(string \$str): int", "echo strlen('Hello World'); // 11 (inclui espaço)");
    listaPesquisa("trim", "Remove espaços em branco ou caracteres do início e do final de uma string", "trim(string \$str, string \$character_mask = ' \\t\\n\\r\\0\\x0B'): string", "echo trim(' Hello World '); // 'Hello World'");
    listaPesquisa("explode", "Divide uma string em um array", "explode(string \$delimiter, string \$string, int \$limit = PHP_INT_MAX): array", "print_r(explode(' ', 'Hello World')); // Array ( [0] => Hello [1] => World )");
    listaPesquisa("implode", "Une os elementos de um array em uma string", "implode(string \$glue, array \$pieces): string", "echo implode(' ', array('Hello', 'World')); // 'Hello World'");
    listaPesquisa("number_format", "Formata um número com os milhares agrupados", "number_format(float \$number, int \$decimals = 0, string \$decimal_separator = '.', string \$thousands_separator = ','): string", "echo number_format(1234.567, 2, ',', '.'); // '1.234,57'");
    listaPesquisa("str_replace", "Substitui todas as ocorrências da string de busca pela string de substituição", "str_replace(mixed \$search, mixed \$replace, mixed \$subject, int &\$count = null): mixed", "echo str_replace('world', 'PHP', 'Hello world'); // 'Hello PHP'");
    listaPesquisa("substr", "Retorna uma parte de uma string", "substr(string \$string, int \$start, int \$length = null): string", "echo substr('Hello World', 6, 5); // 'World'");
    listaPesquisa("date", "Formata uma data/hora local", "date(string \$format, int \$timestamp = time()): string", "echo date('Y-m-d H:i:s'); // '2024-07-30 14:59:00'");
    ?>

    
</body>

</html>