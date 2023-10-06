<?php
    $number = 2;
    if($number > 0)
        echo($number. " jest wieksza od zera <br>");
    else if ($number < 0)
        echo($number. " nie jest wieksze od zera <br>");
    else if($number = 0)
        echo($number. " jest rowna zero <br>");

    $number2 = 100;
    switch($number2)
    {
        case $number2 > 0:
            echo( "jest wieksza od zera");
            break;
        case $number2 < 0:
            echo( "nie jest wieksza od zera");
            break;
        case $number == 0:
            echo("jest rowna zero");
            break;
    }
?>