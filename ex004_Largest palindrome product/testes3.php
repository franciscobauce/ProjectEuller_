<?php


$lista1 = [];
$lista2 = [];
for ($i = 10; $i <= 99; $i++) {
    array_push($lista1, $i);
}

foreach ($lista1 as $num) {
    for ($j = 10; $j <= 99; $j++) {
        $multi = $num * $j;
        $lista2[] = $multi;

    }

}

foreach ($lista2 as $num2){
    echo "$num2" . PHP_EOL;
}
