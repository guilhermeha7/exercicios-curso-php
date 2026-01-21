<?php
//Expressão regulares podem ser utilizadas para validar formatos de dados, como e-mails, telefones, CEPs, entre outros ou mesmo para buscar e substituir padrões em textos.
// ^ indica o início da expressão
// $ indica o final da expressão

$string = "abca";
$padrao = "/^a/"; //Se a string começar com 'a'

if (preg_match($padrao, $string)) { //Se a string corresponder ao padrão
    echo "A string '$string' corresponde ao padrão '$padrao'.";
} else {
    echo "A string '$string' não corresponde ao padrão '$padrao'.";
}