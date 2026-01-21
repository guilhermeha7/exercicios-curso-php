<?php
//strtoupper(string): converte uma string para maíuscula
$nome = "Rodrigo";
$novoNome = strtoupper($nome);
echo $novoNome;
echo "<br>";

//strtolower(string): converte uma string para minuscula
$nome2 = "Guilherme";
$novoNome2 = strtolower($nome2);
echo $novoNome2;
echo "<br>";

//substr(string, start, opcional length): corta uma string
$frase = "Olá mundo";
$fraseCortada = substr($frase, 4, 4); //Vai começar no caracter 4 a frase
echo $fraseCortada;
echo "<br>";

//str_repeat: transforma uma string em uma maior repetindo sua composição
$frase2 = str_repeat("Sucesso!", 5);
echo $frase2;
echo "<br>";

//strlen: retorna o comprimento de uma string
$frase3 = "Olá mundo"; //O "á" é um único caractere, mas ocupa mais de um byte em UTF-8
echo strlen($frase3);
echo "<br>";

//str_replace(palavra a ser substituida, nova palavra, string): substitui em uma string uma palavra por outra
$frase4 = "Olá Guilherme";
$novaFrase4 = str_replace("Guilherme", "João", $frase4);
echo $novaFrase4;
echo "<br>";

//str_pad(string, comprimento da nova string, agregado, esquerda ou direita da string): adiciona caracteres em uma string, tanto no fim como no começo
$mensagem = "Olá mundo";
$saldo = 100;
$mensagemFormatada = str_pad($mensagem, 11, ".");
$saldoFormatado = str_pad($saldo, 5, "R$", STR_PAD_LEFT);
echo $mensagemFormatada;
echo "<br>";
echo $saldoFormatado;
echo "<br>";