<?php
    $rok = 1901;
    $stulecie = ceil($rok/100);
    echo("Stulecie " .$stulecie );
    if ($rok % 4 == 0 && $rok % 100 != 0 || $rok % 400 == 0) 
        echo("<br>Jest to rok przestępny");
    else
        echo("<br>Nie jest to rok przestępny");
    

?>