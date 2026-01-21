<?php
$nome = "Guilherme";
$saldo = 100.2;
$usuarios = array("sergio123", "mario123", "guilherme123", "maria123"); //Array/Vetor é o tipo de dado que guarda uma lista de dados

/*var_dump é uma função que mostra informações sobre uma variável, como o tipo dela*/
var_dump($nome);
echo "<br>";
var_dump($saldo);
echo "<br>";
var_dump($usuarios);
echo "<br>";

class Cliente
{
    //Atributos    
    public $nome;
    public $idade;
}

$cliente = new Cliente();
$cliente->nome = "Guilherme";
echo $cliente->nome;