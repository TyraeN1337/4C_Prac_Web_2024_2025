<?php
    $number = 101;
    if($number >= 100 && $number <= 150)
        echo($number " jest w przedziale <br>");
    else
        echo($number " nie jest w przedziale <br>");
    
    $number2 = 100;
    switch($number2 >= 100 && $number2 <= 150)
    {
      case 0:
          echo("$number2 jest w przedziale");
          break;
      case 1:
          echo("$number2 nie jest w przedziale");
          break;
    }
?>