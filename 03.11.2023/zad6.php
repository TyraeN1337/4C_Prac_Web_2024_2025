<?php
    $sideA = 5;
    $sideB = 5;
    $sideC = 8;

    if (pow($sideA, 2) * pow($sideB, 2) == pow($sideC, 2))
    echo "trojkat jest prostokatny";
    else if ($sideA == $sideB && $sideA != $sideC || $sideB == $sideC && $sideA != $sideC || $sideC == $sideA && $sideC != $sideB)
    {
        echo"Trojkat jest rownoramienny";
    }
    else if ($sideA == $sideB && $sideA == $sideC)
    {
        echo"Trojkat jest rownoboczny";
    }
?>