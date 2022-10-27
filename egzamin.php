<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>https://egzamin-e14.blogspot.com/2018/05/arkusz-e14-01-1801.html</title>
</head>
<body>

<h3>Wstaw ogłoszenie do bazy</h3>

<form action="" method="post">
Podaj tytuł ogłoszenia
    <input type="text" name="tytul" id="" placeholder="tytuł">
        <br>
Podaj treść ogłoszenia
    <textarea name="tresc" id="" cols="30" rows="10">
    
    </textarea>
    <input type="submit" value="Dodaj do bazy">
</form>

<?php
    if(!empty($_POST['tytul']) && !empty($_POST['tresc'])){
        echo "Chcesz wstawić do bazy";
        $tytul = $_POST['tytul'];
        $tresc = $_POST['tresc'];

        $polaczenie = mysqli_connect("localhost", "root", "", "ogloszenia");

        $zapytanie = "INSERT INTO `ogloszenie` (`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES (NULL, '1', '1', '1', '$tytul', '$tresc'); ";

        mysqli_query($polaczenie, $zapytanie);

        mysqli_close($polaczenie);
    }
?>

<h2>Wszystkie ogłoszenia</h2>

<?php
$polaczenie = mysqli_connect("localhost", "root", "", "ogloszenia");

$zapytanie = "SELECT `tytul`, `tresc` FROM `ogloszenie` ";

$wynik = mysqli_query($polaczenie, $zapytanie);
while($rekord = mysqli_fetch_array($wynik)){
    echo "<h3>Tytuł: $rekord[0]</h3>";
    echo "<p><strong>Treść: </strong>$rekord[1]</p>";
}
?>

<form action="" method="post">
    Podaj Imię
    <input type="text" name="imie" id="">
    Podaj Nazwisko
    <input type="text" name="nazwisko" id="">
    Podaj Telefon
    <input type="number" name="telefon" id="">
    Podaj Mail
    <input type="text" name="mail" id="">

    <input type="submit" value="Zatwierdź">
</form>

<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "ogloszenia");

    if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['telefon']) && !empty($_POST['mail'])){
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $telefon = $_POST['telefon'];
        $mail = $_POST['mail'];

        $zapytanie = "INSERT INTO `uzytkownik` (`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES (NULL, '$imie', '$nazwisko', '$telefon', '$mail'); ";

        mysqli_query($polaczenie, $zapytanie);

        mysqli_close($polaczenie);
    }
?>
</body>
</html>