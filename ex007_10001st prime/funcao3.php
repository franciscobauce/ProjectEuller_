<?php


function testarPrimo($parar)
{
    $numerodeprimos = 0;
    $i = 2;

    while($numerodeprimos < $parar)

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

        }

        $i++;

    }

}
