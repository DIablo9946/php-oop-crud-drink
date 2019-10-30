<?php

  include "db-popo.php";
  include "db-query.php";
  include "db-connection.php";
  include "db.test.php";

  $res = $conn -> query($query_getAllDrinks);

  $drinks = [];

  if ($res && $res -> num_rows > 0){

    while ($row = $res -> fetch_assoc()){

      $drink = new Drink($row);
      $drinks[] = $drink;
    }
  }


  foreach ($drinks as $drink){

    echo $drink . "<br>";
  };
  echo "<br>-------------------<br><br>";
  $min = $drinks[0];
  $max = $drinks[0];
  $sum = 0;
  foreach ($drinks as $drink) {
    if ($min -> getPrice() > $drink -> getPrice()){
      $min = $drink;
    }
    if ($max -> getPrice() < $drink -> getPrice()){
      $max = $drink;
    }
    $sum += $drink -> getPrice();
  }
  echo "MIN: " . $min . "<br>"
        . "MAX: " . $max . "<br>"
        . "SUM: " . $sum . "<br><br>";


        $rettangoli =[];

        for ($i = 0; $i < 10; $i++){
          $rettangolo = new Rettangolo(rand(1,10), rand(1,10));
          $rettangoli[] = $rettangolo;

          echo $rettangolo -> __toString() . "<br>";
        }

        // var_dump($rettangoli);
?>
