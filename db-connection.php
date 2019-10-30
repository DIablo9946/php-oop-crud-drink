<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beverangeshop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error ){

  var_dump("error connecting");
  var_dump($conn);
  die();
}

?>
