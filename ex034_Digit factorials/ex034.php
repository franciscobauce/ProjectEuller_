<?php

include "funcoes4.php";

$total = 0;
for ($i = 10; $i < 41000; $i++) {
    $total += testar($i);
}

echo "$total";

