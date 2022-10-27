<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki</title>
</head>
<body>
    
<?php

    $polaczenie = mysqli_connect("localhost", "root", "", "wycieczki");

    $zapytanie = "SELECT `nazwaPliku`, `podpis` FROM `zdjecia` ";

    $wynik = mysqli_query($polaczenie, $zapytanie);

    while($rekord = mysqli_fetch_array($wynik)){
        echo "<img src='$rekord[0]' alt='$rekord[1]'>";
    }
    
    mysqli_close($polaczenie);
?>

<br>

<?php

    $polaczenie = mysqli_connect("localhost", "root", "", "wycieczki");

    $zapytanie = "SELECT `id`, `dataWyjazdu`, `cel`, `cena` FROM `wycieczki` WHERE `dostepna` = 1 ";

    $wynik = mysqli_query($polaczenie, $zapytanie);

    while($rekord = mysqli_fetch_array($wynik)){
        echo "$rekord[0]. $rekord[1], $rekord[2], cena: $rekord[3] <br>";
    }

    mysqli_close($polaczenie);
?>

</body>
</html>