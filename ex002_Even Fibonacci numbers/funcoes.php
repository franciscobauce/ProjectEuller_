<?php

function exibeMsg($msg)
{
    echo "$msg" . PHP_EOL;
}

function fibonacci(int $num)
{
    $anterior = 0;
    $proximo = 1;
    $soma = 0;

    for($i = 0; $i < $num; $i++){
        $proximo = $anterior + $proximo;
        $anterior = $proximo - $anterior;
        if ($proximo % 2 == 0) {
            exibeMsg("$proximo par");
            $soma += $proximo;
        }
        else{
            exibeMsg($proximo);
        }
    }
    exibeMsg("A soma dos números pares é $soma");

}