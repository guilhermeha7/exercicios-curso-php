<?php
include 'conexao.php';

// Busca o usuário específico
$result = mysqli_query( //$result representa as linhas e colunas retornadas pela consulta
    $connect,
    "SELECT username FROM users 
     WHERE username = '<script>alert(''voce foi hackeado'')</script>'"
);

$row = mysqli_fetch_assoc($result); //mysqli_fetch_assoc cria um array com os valores da primeira linha da consulta. O nome das colunas viram os índices do array.
/*
$row = [
    'id' => 2,
    'username' => '<script>alert('voce foi hackeado')</script>',
    'password' => '...'
];
 */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exibição protegida</title>
</head>
<body>

<h2>Usuário (com proteção)</h2>

<p>
    <?php
    // Protegido contra XSS
    echo htmlspecialchars($row['username']);
    ?>
</p>

</body>
</html>