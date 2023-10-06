<?php
    $number = 1900;

    if ($number % 4 == 0 && $number % 100 != 0 || $number % 400 == 0) 
        echo("luty ma 29 dni<br>");
    else
        echo("luty ma 28 dni<br>");


    switch ($number) {
        case $number % 4 == 0 && $number % 100 != 0 || $number % 400 == 0:
            echo("luty ma 29 dni");
            break;
        
        default:
        echo("luty ma 28 dni");
            break;
    }
?>