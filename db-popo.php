<?php

  class Drink {

    private $id;
    private $name;
    private $mark;
    private $price;
    private $expiration;

    public function __construct($row){

      $this -> setId($row["id"]);
      $this -> setName($row["name"]);
      $this -> setMark($row["mark"]);
      $this -> setPrice($row["price"]);
      $this -> setExpiration($row["expiration"]);
    }


    public function getId(){

      return $this -> id;
    }

    public function setId($id){

      $this -> id = $id;
    }

    public function getName(){

      return $this -> name;
    }

    public function setName($name){

      $this -> name = $name;
    }

    public function getMark(){

      return $this -> mark;
    }

    public function setMark($mark){

      $this -> mark = $mark;
    }

    public function getPrice(){

      return $this -> price;
    }

    public function setPrice($price){

      $this -> price = $price;
    }

    public function getExpiration(){

      return $this -> expiration;
    }

    public function setExpiration($expiration){

      $this -> expiration = $expiration;
    }


    public function __toString(){

      return $this -> getId() . " "
            . $this -> getName() . " "
            . $this -> getMark() . " "
            . $this -> getPrice() . " "
            . $this -> getExpiration();

    }
  }



?>
