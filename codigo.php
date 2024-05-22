<?php

$numero = $_POST['numero'];


$x = 1;

while ($x <= 10) {
    
  
  $result = $numero * $x;
  echo "$result"."x"."$x"."="."$result";
  echo "<br>";
  $x++;  

}



?>