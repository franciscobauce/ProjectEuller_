<?php
function testar(int $numero)
{
    $soma = 0;
    $str = strval($numero);
    echo "$str =";
    for ($i = 0; $i < strlen($str); $i++) {
        $int = intval($str[$i]);

        if ($int == 1) {
            $fat = "1! +";
            $int = 1;
        } else if ($int == 0) {
            $fat = "0! +";
            $int = 1;
        } else if ($int == 2) {
            $fat = "2! +";
            $int = 2;
        } else if ($int == 3) {
            $fat = "3! +";
            $int = 6;
        } else if ($int == 4) {
            $fat = "4! +";
            $int = 24;
        } else if ($int == 5) {
            $fat = "5! +";
            $int = 120;
        } else if ($int == 6) {
            $fat = "6! +";
            $int = 720;
        } else if ($int == 7) {
            $fat = "7! +";
            $int = 5040;
        } else if ($int == 8) {
            $fat = "8! +";
            $int = 40320;
        } else {
            $fat = "9! +";
            $int = 362880;
        }

        echo " $fat";
        $soma += $int;

    }

    echo " = $soma " . PHP_EOL;

    if ($soma == $numero) {
        echo "OKOKOKOKOKOKOKOKOKOKOKOKOKOKOKOKOKOOKOOKOKOKOKOKOKOKOKOKOKOKOKOKOKOKOKOKOKOKKO" . PHP_EOL;


    } else {
        echo "Não OK" . PHP_EOL;
    }
}