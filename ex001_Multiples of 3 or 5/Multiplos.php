<?php

require_once "funcoes.php";

class Multiplos
{
    private static $soma;
    private $numeros;

    public function __construct(int $num)
    {
        $this->numeros = $num;

    }

    public function getMultiplosVerificados(): string
    {
        if ($this->numeros  % 3 == 0 && $this->numeros  % 5 == 0){
            self::$soma += $this->numeros;
            return exibeMsg("$this->numeros  - Multiplo de 3 ou 5");

        } else if ($this->numeros  % 3 == 0){
            self::$soma += $this->numeros;
            return exibeMsg("$this->numeros  - Multiplo de 3");

        } else if ($this->numeros  % 5 == 0 ){
            self::$soma += $this->numeros;
            return  exibeMsg("$this->numeros  - Multiplo de 5");

        }
        return false;
    }

    public static function getSoma(): string
    {
      echo  exibeMsg("A soma dos multiplos é");
      echo  exibeMsg(Multiplos::$soma);
      return false;
    }

}