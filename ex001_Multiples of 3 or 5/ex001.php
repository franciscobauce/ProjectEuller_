<?php

#teste

require_once "funcoes.php";

$soma = 0;


for($i = 1; $i <= 15; $i++){

    if ($i % 3 == 0 && $i % 5 == 0){
        echo exibeMsg("$i - Multiplo de 3 ou 5");
        $soma += $i;
    }

    else if ($i % 3 == 0){
        echo exibeMsg("$i - Multiplo de 3");
        $soma += $i;
    }

    else if ($i % 5 == 0 ){
        echo exibeMsg("$i - Multiplo de 5");
        $soma += $i;
    }
    else{
        echo exibeMsg("$i");
    }
}

echo "A soma dos multiplos é $soma";