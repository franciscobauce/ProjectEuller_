<?php
function testar(int $numero): int
{
    $array = [];
    $soma = 0;
    $str = strval($numero);
    $strLen = strlen($str);
    for ($i = 0; $i < $strLen; $i++) {
        $int = intval($str[$i]);

        if ($int == 1) {
            $int = 1;

        } else if ($int == 0) {
            $int = 1;

        } else if ($int == 2) {
            $int = 2;

        } else if ($int == 3) {
            $int = 6;

        } else if ($int == 4) {
            $int = 24;

        } else if ($int == 5) {
            $int = 120;

        } else if ($int == 6) {
            $int = 720;

        } else if ($int == 7) {
            $int = 5040;

        } else if ($int == 8) {
            $int = 40320;

        } else {
            $int = 362880;

        }

        $soma += $int;

    }

    $array[] = $soma;

    if ($soma == $numero) {
        foreach ($array as $teste){
        echo "$teste" . PHP_EOL;
        return $soma;
        }
    }

    return false;
}