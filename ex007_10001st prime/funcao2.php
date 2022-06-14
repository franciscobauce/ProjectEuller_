<?php


function testarPrimo( $parar)
{
    $num1 = 99999999999999;
    $numerodeprimos = 0;

    for ($i = 1; $i <= $num1; $i++)
    {
        $cont = 0;
        for ($j = 1; $j <= $i; $j++)
        {
            if ($i % $j == 0){
                $cont++;

            }

        }
        if ($cont <= 2) {
            $numerodeprimos++;
            echo " $i É primo - ";


        echo "Índice: $numerodeprimos" . PHP_EOL;

        if ($numerodeprimos >= $parar){
            break;
        }

        }

    }

}
