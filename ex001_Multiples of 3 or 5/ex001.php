<?php

require_once "Multiplos.php";


for ($i = 1; $i <= 9; $i++) {
    $num = new Multiplos($i);
    echo $num->getMultiplosVerificados();
}

echo Multiplos::getSoma();