<?php

$strNum = 7316717653133062;
$strNum = strval($strNum);
$strLen = strlen($strNum);

for ($i = 0; $i <= $strLen - 4; $i++){
      $num1 = $strNum[$i];
      $num2 = $strNum[$i + 1];
      $num3 = $strNum[$i + 2];
      $num4 = $strNum[$i + 3];

      $produto = $num1 * $num2 * $num3 * $num4;
      echo "$num1$num2$num3$num4 - Produto = $produto" ;

  if ($i == 0){
    $maior = $produto;
    $menor = $produto;

  }else{
      if ($produto > $maior){
          $maior = $produto;

      }
      if ($produto < $menor){
          $menor = $produto;
      }
  }

  echo PHP_EOL;

}
echo "Maior produto é $maior";