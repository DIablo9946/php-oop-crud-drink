<?php

  class Rettangolo {

    private $baseA;
    private $baseB;

    public function __construct($baseA, $baseB){

      $this -> setBaseA($baseA);
      $this -> setBaseB($baseB);
    }

    public function getBaseA(){
      return $this -> baseA;
    }

    public function setBaseA($baseA){
      return $this -> baseA = $baseA;
    }

    public function getBaseB(){
      return $this -> baseB;
    }

    public function setBaseB($baseB){
      return $this -> baseB = $baseB;
    }

    public function area(){

      return $this -> baseA * $this -> baseB;
    }

    public function __toString(){
      return $this -> getBaseA() . " "
            . $this -> getBaseB();
    }
  }

?>
