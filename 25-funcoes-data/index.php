<?php
date_default_timezone_set('America/Sao_Paulo');

//Para retornar a data atual
$date = date('d/m/Y'); //Formato dia/mes/ano_4_digitos

//Para retornar data e hora atual
$dateTime = date('d/m/Y H:i:s'); //Formato dia/mes/ano_4_digitos horas:minutos:segundos

//Para retornar uma data e hora futura
$dataPagamento = date('d/m/Y H:i:s', strtotime('+7 days')); //Adiciona 7 dias em relação à data atual

$dataPagamento2 = mktime(15, 30, 00, 02, 15, 2077); //mktime retorna um timestamp (instante que representa o número de segundos desde 01/01/1970 00:00:00)
$dataPagamento2Convertida = date('d/m/Y H:i:s', $dataPagamento2); //converte de timestamp para data e hora legível

//Saída
echo("Data atual: $date <br><br>");
echo("Data e hora atual: $dateTime <br><br>");
echo("Data de pagamento (7 dias a partir de hoje): $dataPagamento <br><br>");
echo("Data de pagamento 2 (15/02/2077 15:30:00): " . $dataPagamento2Convertida . "<br><br>");