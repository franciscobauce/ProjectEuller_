<?php
function testar($numero)
{
    $array = [];
    $total = [];
    $soma = 0;
    $str = strval($numero);
    for ($i = 0; $i < strlen($str); $i++) {
        $int = intval($str[$i]);

        if ($int == 1) {
            $fat = "1! +";
            array_push($array, $fat);
            $int = 1;
        } else if ($int == 0) {
            $fat = "0! +";
            $int = 1;
            array_push($array, $fat);
        } else if ($int == 2) {
            $fat = "2! +";
            $int = 2;
            array_push($array, $fat);
        } else if ($int == 3) {
            $fat = "3! +";
            $int = 6;
            array_push($array, $fat);
        } else if ($int == 4) {
            $fat = "4! +";
            $int = 24;
            array_push($array, $fat);
        } else if ($int == 5) {
            $fat = "5! +";
            $int = 120;
            array_push($array, $fat);
        } else if ($int == 6) {
            $fat = "6! +";
            $int = 720;
            array_push($array, $fat);
        } else if ($int == 7) {
            $fat = "7! +";
            $int = 5040;
            array_push($array, $fat);
        } else if ($int == 8) {
            $fat = "8! +";
            $int = 40320;
            array_push($array, $fat);
        } else {
            $fat = "9! +";
            $int = 362880;
            array_push($array, $fat);
        }

        $soma += $int;

    }
    array_unshift($array, $soma,' = ');
    array_push($array, ' = ' ,$soma);
    if ($soma == $numero) {
        array_unshift($total, $soma);
        foreach ($array as $teste){
        echo "$teste" . PHP_EOL;
        return $soma;
        }
    }



}