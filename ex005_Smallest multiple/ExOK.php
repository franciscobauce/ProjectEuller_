<?php

$cont = 0;
$num = 0;
while ($cont == 0){
    $num++;
    echo "$num" . PHP_EOL;
    $teste = 0;
    for($j = 1; $j <= 20; $j++) {
        if ($num % $j != 0) {
            $teste += 1;
        }
    }

    if ($teste == 0){
        $cont += 1;
        echo $num;
    }
}


