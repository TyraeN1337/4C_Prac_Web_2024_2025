<?php
$pl = 4;
$exchange = 1;
switch($exchange)
{
     case 0:
        echo("Dolary: " .$pl / 3.21 );
        echo("zł");
        break;
    case 1:
        echo("Euro: " .$pl / 4.32 );
        echo("zł");
        break;
    case 2:
        echo("Franki: " .$pl / 3.93 );
        echo("zł");
        break;
 }
?>