<?php
//Superglobais são variáveis que podem ser acessadas de qualquer lugar do código PHP

//$GLOBALS: é o array onde o PHP disponibiliza as variáveis do escopo global automaticamente (as variáveis declaradas fora de funções e classes) para acesso em qualquer parte do código.
$x = 10;
$y = 20;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

echo soma()."<br>";


//$_SERVER: retorna informações específicas
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";