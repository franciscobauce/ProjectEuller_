<?php

function fatoresPrimos($num)
{
    $divisores = [];
    echo "Os fatores primos de $num são:" . PHP_EOL;

    for ($i = 2; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $num = $num / $i;
            echo "$i" . PHP_EOL;
            $divisores[] = $i;
            $i = 1;
        }
    }

    $ultimo = end($divisores);
    echo "O maior fator primo é $ultimo";

}




