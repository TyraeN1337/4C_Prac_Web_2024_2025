<?php
    $number = 1;
    $number1 = 3;
    $number2 =2;

    if ($number == $number1 || $number == $number2) 
        echo("są 2 takie same <br>");
    else if($number1 == $number2)
        echo("są 2 takie same<br>");
    else 
        echo("nie ma <br>");

    switch(true)
    {
        case $number == $number1 || $number == $number2:
            echo("są 2 takie same<br>");
            break;
        case $number1 == $number2:
            echo("są 2 takie same<br>");
            break;
        default:
            echo("nie ma<br>");
            break;

    }
?>