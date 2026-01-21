<?php
/*Tanto o include como o require servem para incluir o código de um arquivo em outro arquivo PHP. 
Eles tem o objetivo principal de promover a reutilização de código e evitar concentrar muito código em um único arquivo.
O conteúdo do include é executado onde você deixá-lo, podendo ser dentro de uma condicional if por exemplo também.*/

include 'header.php'; //O include inclui o código do arquivo especificado. Se o arquivo não for encontrado, ele gera um aviso (warning), mas o script continua a ser executado.
require 'footer.php'; //O require inclui o código do arquivo especificado. Se o arquivo não for encontrado, ele gera um erro fatal e o script para de ser executado.