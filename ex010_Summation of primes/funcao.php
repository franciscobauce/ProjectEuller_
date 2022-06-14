<?php


function testarPrimo($num)
{
    $soma = 0;

    for ($i = 2; $i <= $num; $i++){
        $cont = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $cont++;
            }

        }
        if ($cont <= 2) {

            echo "$i É primo - Índice: $i" . PHP_EOL;
            $soma += $i;

        }


    }

    echo "A soma dos primos é $soma";
}