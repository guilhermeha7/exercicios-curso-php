<?php
$arquivo = 'arquivo.txt';
$arquivoAberto = fopen($arquivo, 'r'); //'r' vem de read e abre o arquivo com o intuito de ler algo nele
$tamanhoDoArquivo = filesize($arquivo); //filesize(arquivo): obtém o tamanho do arquivo

//feof(arquivo aberto): verifica se é o final do arquivo
//fegets(arquivo aberto, tamanho máximo da linha): lê uma linha do arquivo aberto até o tamanho máximo especificado
while (!feof($arquivoAberto)) { //Enquanto não for o final do arquivo
    $linha = fgets($arquivoAberto, $tamanhoDoArquivo); //Pegue o conteúdo de cada linha e atribua à variável $linha
    echo $linha . "<br>";
}