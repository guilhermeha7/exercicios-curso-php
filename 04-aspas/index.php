<?php
$nome = "Guilherme";

echo "Meu nome é $nome <br>"; //Aspas duplas interpretam $algumacoisa como variável
echo 'Meu nome é $nome <br>'; //Aspas simples interpretam $algumacoisa como texto e não como variável
echo 'Meu nome é '.$nome; //. em PHP é o operador de concatenação usado com aspas simples