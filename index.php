<?php

  include "db-popo.php";
  include "db-query.php";
  include "db-connection.php";

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

?>
