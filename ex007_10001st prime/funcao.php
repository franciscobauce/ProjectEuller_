<?php

function testarPrimo(int $num)
{
    $cont = 0;
    for ($i = 2; $i <= $num; $i++) {

        if ($num % $i == 0) {
            $cont++;
        }
    }

    if ($cont <= 2) {
        echo "$num é número primo" . PHP_EOL;
        echo " " . PHP_EOL;
        return $num;
    }

}

