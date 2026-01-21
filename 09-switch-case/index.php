<?php
$cor = "";
switch ($cor) {
    case "vermelho":
        echo ("A cor é vermelha");
        break; 
    case "roxo":
        echo ("A cor é roxa");
        break; //Se não for colocado um break, o PHP executa os outros comandos abaixo.
    case "amarelo":
        echo ("A cor é amarela");
        break;
    default: //É executado se nenhuma das condições acima for atendida
        echo ("Sua cor não está definida");
}
