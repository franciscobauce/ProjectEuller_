<?php


$lista1 = [];
$lista2 = [];
$palindromos = [];


for ($i = 100; $i <= 999; $i++) {
    array_push($lista1, $i);
}

foreach ($lista1 as $num) {
    for ($j = 100; $j <= 999; $j++) {
        $multi = $num * $j;
        $lista2[] = $multi;

    }

}

foreach ($lista2 as $item) {
    $str = strval($item);
    $invertido = strrev($str);
    if ($str === $invertido){
        echo "$str $invertido Palindromo" . PHP_EOL;
        $palindromos[] = $invertido;

        }


}
$maior = max($palindromos);

echo "$maior Maior Palíndromo";

