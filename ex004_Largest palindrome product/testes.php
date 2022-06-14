<?php


$lista1 = [];
$lista2 = [];
for($i = 10; $i <= 99; $i++){
    array_push($lista1, $i);
}
/*criar uma função para receber os resultados */
foreach ($lista1 as $num){
    for($j = 10; $j <= 99; $j++){
        $multi = $num * $j;
        $lista2[] = $multi;

    }

}

print_r($lista2);

