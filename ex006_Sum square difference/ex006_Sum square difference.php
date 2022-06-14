<?php

$soma1 = 0;
$numeros = [];
for($i = 1; $i <= 100; $i++ ){
    $potencia = pow($i, 2);
    $numeros[] = $i;
    $soma1 += $potencia;

}

$soma2 = pow(array_sum($numeros),2);
$diferenca = $soma2 - $soma1;
echo "$soma2 - $soma1 = $diferenca";



