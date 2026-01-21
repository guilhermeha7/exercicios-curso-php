<?php
/*number_format(numero, numero de casas após a vírgula, separador decimal, separador de milhares): define o número máximo de casas números após a vírgula, 
define o separador decimal (simbolo usado para separar a parte inteira da parte fracionária 
e o separador de milhares (simbolo usado para separar grupos de três dígitos em números grandes, facilitando a leitura) */
$db = 2138.10231;
$precoFormatado = number_format($db, 2, ",", ".");
echo "R$ $precoFormatado";
echo "<br>";

//round: arredonda um número para um número inteiro para cima ou para baixo
echo round(321.6312312341241);
echo "<br>";

//ceil: arredonda um número para um número inteiro sempre para cima
echo ceil(100.10);
echo "<br>";

//floor: arredonda um número para um número inteiro sempre para baixo
echo floor(100.90);
echo "<br>";

//rand: gera números aleatórios de um valor x a outro valor y
$numeroSorteado = rand(1,2);
echo $numeroSorteado;
echo "<br>";