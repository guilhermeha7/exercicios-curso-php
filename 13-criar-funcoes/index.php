<?php
function somar(int $a, int $b): int {
    $resultado = $a + $b;
    return $resultado;
}

$soma = somar(10, 6);
echo $soma;