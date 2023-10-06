<?php
   $number = 2;
   if ($number%2 == 0)
      echo("$number liczba jest parzysta <br>");
   else
      echo("$number liczba jest nieparzysta <br>");


   $number2 = 3;
   switch($number2 % 2 == 0)
   {
      case 0:
          echo("$number2 nie jest parzysta");
          break;
      case 1:
          echo("$number2 jest parzysta");
         break;
   }
?>