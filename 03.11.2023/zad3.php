<?php
      $cena = 300;
      $kategoria = 1;
      switch($kategoria)
      {
          case 0:
              echo("Pieczywo: " .$cena * 1.55);
              break;
          case 1:
              echo("Elektronika: " .$cena * 1.23);
              break;
          case 2:
              echo("Odzież: " .$cena * 1.13);
              break;
  
          }
?>