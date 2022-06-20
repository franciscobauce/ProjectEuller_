<?php

require_once "funcaoDeFatoracao.php";

function testar(int $numero): int
{
    $soma = 0;
    $str = strval($numero);
    $strLen = strlen($str);
    for ($i = 0; $i < $strLen; $i++) {
        $int = intval($str[$i]);
        $numeroFatorado = fatorar($int);
        $soma += $numeroFatorado;

    }

    if ($soma == $numero) {
        echo "$numero" . PHP_EOL;
        return $soma;

    }

    return false;

}