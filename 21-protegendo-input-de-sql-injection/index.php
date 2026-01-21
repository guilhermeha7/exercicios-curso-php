<?php
// Inclui a conexão com o banco
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coleta os dados enviados pelo formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepara a consulta SQL com um "?" no lugar do valor de login e senha
    $consulta = mysqli_prepare($connect, "SELECT * FROM users WHERE username = ? AND password = ?");

    // Coloca o username e a senha nos lugares dos ? de forma segura, protegendo contra SQL Injection
    // "ss" significa que ambos os parâmetros são strings (s)
    mysqli_stmt_bind_param($consulta, "ss", $username, $password);

    // Executa a consulta
    mysqli_stmt_execute($consulta);

    // Armazena o resultado da consulta
    $result = mysqli_stmt_get_result($consulta);

    // Verifica se o login e a senha existem no banco
    if (mysqli_num_rows($result) > 0) {
        echo "Login bem-sucedido!";
    } else {
        echo "Login ou senha incorretos!";
    }

    // Fecha a declaração
    mysqli_stmt_close($consulta);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>