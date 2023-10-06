<?php
    $number = 4;
    $number2 = 1;
    $number3 = 3;
    if($number3 > $number2 && $number3 > $number)
        echo($number3. " jest najwieksza");
    else if($number2 > $number3 && $number2 > $number)
        echo($number2. " jest najwieksza");
    else if($number > $number3 && $number > $number2)
        echo($number. " jest najwieksza");
    
    switch($number1)
    {
        case $number < $number2 && $number < $number3:
            echo($number." = jest najmniejsza");
            break;
        case $number2 < $number3:
        echo($number2." = jest najmniejsza");
            break;
        default:
        echo($number3." = jest najmniejsza");
            break;

    }
?>
    
?>