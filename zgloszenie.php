<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Dodaj nowe zawody wędkarskie</h2>

    <form action="" method="post">
        Łowisko<br>
        <input type="number" name="lowisko" id=""><br>
        Data(rrrr-mm-dd)<br>
        <input type="text" name="data" id=""><br>
        Sędzia<br>
        <input type="text" name="sedzia" id=""><br>

        <input type="reset" value="WYCZYŚĆ">
        <input type="submit" value="DODAJ">
    </form>

<?php
if(isset($_POST['lowisko']) && isset($_POST['data']) && isset($_POST['sedzia'])){
    $lowisko = $_POST['lowisko'];
    $data = $_POST['data'];
    $sedzia = $_POST['sedzia'];
    
    $polaczenie = mysqli_connect("localhost", "root", "", "wedkarstwo");

    $zapytanie = "INSERT INTO `zawody_wedkarskie` (`id`, `Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (NULL, '0', '$lowisko', '$data', '$sedzia');";

    mysqli_query($polaczenie,$zapytanie);

    mysqli_close($polaczenie);
}
?>
</body>
</html>