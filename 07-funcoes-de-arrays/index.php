<?php
/*
 * is_array($array) = verifica se uma determinada variável é um array
 * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array
 * array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
 * array_values($array) = retorna um novo array com os valores do array passado como parâmetro
 * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays
 * array_pop($array) = exclui a última posição do array
 * array_shift($array) = exclui a primeira posição do array
 * array_unshift($arr, "valor") = adiciona um ou mais elemento no início do array
 * array_push($array, "valor", "valor") = Adiciona um ou mais elementos no final de um array
 * array_combine($keys, $values) = mescla os dois arrays passados
 * array_sum() = calcula a soma dos elementos de um array
 * explode("/", "20/01/2001") = transforma string em array
 * implode("_", $arr) = transforma array em string
 */

$frutas = array("Banana", "Maçã", "Uva");

//Exemplo com in_array: verifica se um determinado valor existe em alguma posição do array
if (in_array("Uva", $frutas)) { //Se no array $frutas tiver um valor igual a "Pêssego" executa o que estiver entre chaves
    echo("Uva foi encontrada <br>");
}
else {
    echo("Uva não foi encontrada <br>");
}

//Exemplo com array_values: passa os valores de um array para outro
$frutas2 = array_values($frutas);
print_r($frutas2);
echo "<br>";

//Exemplo com array_merge: cria um array juntando os elementos de 2 ou mais arrays.
$carros = array("Carro 1", "Carro 2", "Carro 3");
$motos = array("Moto 1", "Moto 2", "Moto 3");
$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<br>";

//Exemplo com array_pop: retira o último elemento de um array (última posição)
array_pop($veiculos);
print_r($veiculos);
echo "<br>";

//Exemplo com array_shift: retira o primeiro elemento de um array (posição 0)
array_shift($veiculos);
print_r($veiculos);
echo "<br>";

//Exemplo com array_unshift: adiciona um ou mais elementos nas primeiras posições do array
array_unshift($frutas2, "Manga");
echo $frutas2[0];
echo "<br>";

//Exemplo com array_push e end: array_push: adiciona um ou mais elementos nas últimas posições do array; end: retorna o valor do último elemento
array_push($frutas2, "Morango");
echo end($frutas2);
echo "<br>";

//Exemplo com array_sum: soma os valores de um array
$numeros = array(10, 7.5, 2.4);
$soma = array_sum($numeros);
echo $soma;
echo "<br>";

//Exemplo com explode(delimitador, dados): corta uma string (cadeia de texto) e cria um array (lista de palavras)
$data = "16/06/2024";
$nova_data = explode('/', $data);
print_r($nova_data);
echo "<br>";

//Exemplo com implode(espaço, dados): pega um array e une os seus valores em uma string
$nomes = array("Satoru", "Tanjiro", "Mei", "Lain");
$string = implode(", ",$nomes);
echo $string;