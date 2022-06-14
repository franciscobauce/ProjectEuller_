<?php
$soma = 0;
for($i = 1; $i <= 15; $i++){

    if ($i % 3 == 0 && $i % 5 == 0){
        echo "$i - Multiplo de 3 ou 5" . PHP_EOL;
        $soma += $i;
    }

    else if ($i % 3 == 0){
        echo "$i - Multiplo de 3" . PHP_EOL;
        $soma += $i;
    }

    else if ($i % 5 == 0 ){
        echo "$i - Multiplo de 5" . PHP_EOL;
        $soma += $i;
    }
    else{
        echo $i . PHP_EOL;
    }
}

echo "A soma dos multiplos é $soma";