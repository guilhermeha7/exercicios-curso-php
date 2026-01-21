<?php
$host = 'localhost';
$root = 'root';
$password = '1234567';
$dbname = 'test_db';

$connect = mysqli_connect($host, $root, $password, $dbname);

//Verifica se a conexão foi bem sucedida
if (!$connect) {
    die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error()); //Se não foi possível conectar, exibe uma mensagem de erro  
}

