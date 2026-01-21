<?php
$arquivo = 'arquivo.txt';

//fopen(arquivo, modo): abre um arquivo com o objetivo de extrair dados ou inserir dados
$arquivoAberto = fopen($arquivo, 'a'); //'a' vem de append e abre o arquivo com o intuito de escrever algo no final dele)

//fwrite(arquivo aberto, dados): escreve dados em um arquivo aberto
fwrite($arquivoAberto, "Adicionando uma nova linha no arquivo\r\n");

//fclose(arquivo): fecha o arquivo aberto
fclose($arquivoAberto);