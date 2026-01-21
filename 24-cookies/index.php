<?php
//setcookie(nome, valor, expiração): Cria um cookie no navegador do usuário
setcookie('usuario', 'admin', time() + 3600); // Cookie válido por 1 hora
setcookie('tema', 'claro', time() + 3600);   // Cookie válido por 1 hora

setcookie('usuario', 'admin', time() - 3600); // Exclui o cookie

echo $_COOKIE['tema']; // Exibe o valor da chave 'tema'
echo $_COOKIE['usuario']; // Exibe o valor da chave 'usuario'

var_dump($_COOKIE); //Exibe os cookies armazenados no navegador