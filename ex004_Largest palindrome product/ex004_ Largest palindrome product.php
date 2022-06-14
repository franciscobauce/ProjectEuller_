<?php

$num1 = 91;
$num2 = 99;
$multi = $num1 * $num2;
$str = strval($multi);
$inver = [];
$normal = [];

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    array_push($inver, $str[$i]);

}

for ($i = 0; $i <= 3; $i++) {
    array_push($normal, $str[$i]);
}

foreach ($inver as $number){
    echo $number;
}

Echo " " . PHP_EOL;

foreach ($normal as $number){
    echo $number;
}

Echo " " . PHP_EOL;

if ($inver = $normal)
    echo "OK";


