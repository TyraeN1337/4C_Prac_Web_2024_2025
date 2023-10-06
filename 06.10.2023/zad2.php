<?php
    $number = 4;
    $number2 = 1;
    if ($number / $number2 == 0)
     echo(" jest podzielna <br>");
    else
     echo(" nie jest podzielna <br>");

    $number3 = 4;
    $number4 = 2;
    switch($number2 % 2 == 0)
    {
      case 0:
          echo("$number3 jest podzielna");
          break;
      case 1:
          echo("$number3 nie jest podzielna");
         break;
    }
?>