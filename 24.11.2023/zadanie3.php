<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad3</title>
</head>
<body>
    <?php
    echo " petla for: ";
    for ($i = 100; $i <= 125; $i += 5)
    {
        echo $i." ";
    }

    echo "<br> petla while: ";
    $i = 100;
    while($i <= 125)
    {
        echo $i." ";
        $i +=5;
    }

    echo "<br>petla do-while: ";
    $i = 100;
    do
    {
        echo $i." ";
        $i += 5;
    }while($i <= 125);
    ?>
</body>
</html>