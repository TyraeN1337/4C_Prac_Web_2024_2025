<?php
     $host = "localhost";
     $user = "root";
     $pass = "";
     $db = "portal";
    $sql= mysqli_connect("localhost", "root","","portal");
   
?>



<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Portal społecznościowy</title>
    <link href= "styl5.css" rel = "stylesheet">
</head>
<header>
</header>
<body>
    <div class="leftbanner">
        <p><h2>Nasze Osiedle</h2></p>
    </div>
    <div class="rightbanner">
        <?php
            $q = "SELECT count(*) FROM dane";
            $result = $sql->query($q);
            $row = $result->fetch_row();
            $count = $row[0];
            echo "<h5> Liczba użytkowników portalu: $count </h5>";
        ?>
    </div>
    <div class="leftmain">
        <p><h3>Logowanie</h3></p>
        <form action="uzytkownicy.php" METHOD = "POST">
        <label>login<br>
        <input type="text" id="login"><br>
         <label>hasło<br>
        <input type="password" id="password"><br>
        <input type="submit" value="Zaloguj">
    </div>
    <div class="rightmain">
    <h3>Wizytówka</h3>
        <div class= "card">
        <?php
            if (isset($_POST['login']) && isset($_POST['haslo'])){
                $login = $_POST['login'];
                $haslo = $_POST['haslo'];
            
                if ($login != "" && $haslo != "" )
                {
                    $hasloHash = sh1($haslo);

                    $q = "SELECT * FROM uzytkownicy WHERE login = \"$login\"";
                    $result = $sql->query($q);
                    if ($result->num_rows == 0)
                    {
                        echo "login nie istnieje";
                    }else{
                        $row = $result->fetch_assoc();
                        if ($hasloHash = $row['haslo'])
                        {
                            $q = "SELECT uzytkownicy.login ,dane.rok_urodz, dane.przyjaciol,dane.hobby,dane.zdjecie FROM uzytkownicy, dane WHERE uzytkownicy.id = dane.id && login = \"$login\"";
                            $result = $sql->query($q);
                            $row = $result->fetch_assoc();
                            $rok_urodz = $row['rok_urodz'];
                            $przyjaciol = $row['przyjaciol'];
                            $hobby = $row['hobby'];
                            $zdjecie = $row['zdjecie'];
                            $wiek = 2022 - $rok_urodz;
                            echo "<h4>$login, ($wiek)</h4>";
                        }
                    }
                }
            } 
        ?>
        </div>
    </div>
</body>
<footer>
    <div class="footer">
        Stronę wykonał: Jakub Nowak
    </div>
</footer>
</html>