<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "taek";

    $polaczenie = mysqli_connect($host, $user, $pass, $db);
    
    $zapytania = "SELECT * FROM tabela";

    $wynik = mysqli_query($polaczenie, $zapytania);  
?>
<table>
    <tr>
        <td>ID</td>
        <td>Imie</td>
        <td>Nazwisko</td>
        <td>Rok urodzenia</td>
        <td>Miejsce urodzenia</td>
    </tr>
    <?php
    while($row = mysqli_fetch_row($wynik)){
        echo "<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "</tr>";

    }
?>
</table>




