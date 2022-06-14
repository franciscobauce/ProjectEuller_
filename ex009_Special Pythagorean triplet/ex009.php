<?php

for ($a = 1; $a <= 998; $a++) {
    for ($b = 1; $b <= 998; $b++) {
        for ($c = 1; $c <= 998; $c++){
            if($a + $b + $c == 1000) {
                if(pow($a,2) + pow($b,2) == pow($c,2) ){
                    echo "$a + $b + $c = 1000" . PHP_EOL;
                    echo pow($a,2) . " + "   .pow($b,2). " = " . pow($c,2) . PHP_EOL;
                    echo "O produto dos numeros é: ". $a * $b * $c . PHP_EOL;

                }
            }
        }
    }
}