<?php

$nome = $_POST['nome']; //$_POST disponibiliza automaticamente os dados enviados no formulário
$email = $_POST['email'];

echo "O nome cadastrado é $nome e o seu email é $email";