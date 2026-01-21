<?php
//Declaração
$clientes = array("Mauro","Mauricio","Leonardo","Fabricio"); //Primeira forma de declaração de arrays
$frutas = ["Banana","Maçã","Uva"]; //Segunda forma de declaração de arrays

//Adição de um elemento
$clientes[] = "Guiherme"; //Adiciona uma nova string para a lista de strings $clientes

//Inspeção de valores
print_r($clientes); //print_r permite exibir um array na tela para inspeção
print_r($frutas);

//Exibir elemento com foreach
foreach ($clientes as $cliente) { //Para cada cliente no array $clientes
    echo "$cliente <br>";
}
