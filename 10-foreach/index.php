<?php
$cores = array("Verde", "Vermelho", "Azul");

foreach ($cores as $cor) { //Para cada item ($cor) dentro do array ($cores) faça
    echo "$cor <br>";
}

foreach ($cores as $indice => $cor) { //Para cada item ($cor) com indice ($indice) dentro do array ($cores) faça
    echo "$indice: $cor <br>";
}