<?php
  class Conta{
    private $saldo;

    function __construct($valor){
      $this->saldo = $valor;
    }
    public function getSaldo(){
      return $this->saldo;
    }
  }
 ?>
