<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad4</title>
</head>
<body>
    <?php 
    echo "Wyswietlenie liczb naturalnych i ich pierwiastkow kwadratowych: ";

    echo "Pętla for: <br>";
    for($a = 1; $a <=10; $a++)
    {
        $sqrt = sqrt($a);
        echo "Liczba: $a, Pierwiastek kwadratowy: $sqrt <br>";
    }
    
    echo "Pętla while: <br>";
    $b =1;
    while ($b <=10)
    {
        $sqrt = sqrt($b);
        echo "Liczba: $b, Pierwiastek kwadratowy: $sqrt <br>";
        $b++;
    }

    echo "Pętla do-while: <br>";
    $c = 1;
    do
    {
        $sqrt = sqrt($c);
        echo "Liczba: $c, Pierwiastek kwadratowy: $sqrt <br>";
        $c++;
    }while($c <= 10);

    ?>
</body>
</html>