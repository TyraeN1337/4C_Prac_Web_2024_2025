<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad2</title>
</head>
<body>
    <?php
    echo "Pętla for: <br>";
    for($a = 100; $a > 90; $a--)
    {
        echo $a . '<br>';
    }

    echo "Pętla while: <br>";
    $b = 100;
    while ($b > 90)
    {
        echo $b . '<br>';
        $b--;
    }

    echo "Pętla do-while: <br>";
    $c = 100;
    do{
        echo $c . '<br>';
        $c--;
    }while ($c > 90);

    ?>
</body>
</html>