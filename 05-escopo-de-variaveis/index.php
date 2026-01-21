<?php
$idade = 13;

function exibeIdade() {
    global $idade; //Para usar uma variável declarada fora de uma função em uma função, é preciso usar a palavra global. Por padrão em PHP dentro de uma função só é possível acessar uma variável declarada dentro dela, ou seja, variáveis do escopo local.
    echo $idade;
}

exibeIdade();