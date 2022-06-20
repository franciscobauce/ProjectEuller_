<?php

function fatorar(int $int): int
{
    $numeroFatorado = 1;
    for ($i = 1; $i <= $int; $i++){
        $numeroFatorado  *= $i;
    }

    return $numeroFatorado;

}