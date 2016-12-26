<?php 
  class Moderado{
    public function calcula(Conta $Conta){
      $chance = mt_rand(1,100);
      if($chance >= 50){
        return $Conta->getSaldo()

      }

    }
  }
 ?>
