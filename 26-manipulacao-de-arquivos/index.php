<?php
// Definindo os arquivos PHP que podem ser executados
$arquivos = [
    'escrita-no-arquivo.php',
    'extracao-de-dados.php'
];

// Exibindo uma lista de links para os arquivos
echo '<h1>Escolha um arquivo PHP para executar:</h1>';
foreach ($arquivos as $arquivo) {
    echo '<p><a href="' . $arquivo . '">' . $arquivo . '</a></p>';
}
?>