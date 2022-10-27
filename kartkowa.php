<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartkóweczka</title>
</head>
<body>

<h1>Ryby:</h1>

<table>

<tr>
<th>Nazwa</th>
<th>Występowanie</th>
<th>Styl życia</th>
</tr>

<form action="" method="post">
<input type="radio" name="styl" id="" value="1">1
<input type="radio" name="styl" id="" value="2">2

<input type="submit" value="Zatwierdź">
</form>

<?php
if(isset($_POST['styl'])){
    $styl = $_POST['styl'];
}

$polaczenie = mysqli_connect("localhost", "root", "", "klasa4c");

$zapytanie = "SELECT `nazwa`, `wystepowanie`, `styl_zycia` FROM `ryby` WHERE `styl_zycia` = $styl ";

$wynik = mysqli_query($polaczenie,$zapytanie);

while($rekord=mysqli_fetch_array($wynik)){
    echo "<tr><td>$rekord[0]</td><td>$rekord[1]</td><td>$rekord[2]</td></tr>";
}

mysqli_close($polaczenie)
?>
</table>
</body>
</html>