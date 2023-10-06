<?php
    $number = 16;
    if($number > 18)
        echo($number. " dorosły <br> ");
    else if ($number < 18 && $number > 11)
        echo($number. " nastolatek <br>");
    else if($number < 11)
        echo($number. " dziecko <br>");

    $number2 = 8;
    switch($number2)
    {
        case $number2 > 18:
            echo( "dorosly");
            break;
        case $number2 < 18 && $number2 >11:
            echo( "nastolatek");
            break;
        case $number2 < 11:
            echo("dziecko");
            break;
    }
?>