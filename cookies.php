<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyszne ciastka</title>
</head>
<body>
    
<?php
    setcookie("pierwsze_ciasteczko", "wartość w ciasteczku", time()+60*60*24*7);
    //ciastko na 7 dni
    print_r($GLOBALS);
    //licznik odświeżeń strony
    //jeżeli po raz 1 licznik=0
    if(!isset($_COOKIE['licznik'])){
        setcookie("licznik", 0, time()+60*60); //licznik na godzine
    }
    //jeżeli po raz kolejny licznik+1
    else{
        $licznik = $_COOKIE['licznik'];
        $licznik++;
        echo "Odświeżono po raz: $licznik<br>";
        setcookie("licznik", $licznik, time()+60*60);
    }
    //licznik sekund od ostatniego odwiedzenia
    if(!isset($_COOKIE['kiedy'])){
        echo "Zaczynamy liczyć czas";
        setcookie("kiedy", time(),time()*60);
    }
    else{
        $kiedys = $_COOKIE['kiedy'];
        $teraz = time();
        $ile_sekund = $teraz-$kiedys;
        echo "Byłeś ostatnio $ile_sekund sekund temu";
        setcookie("kiedy", time(), time()+60);
    }
?>
</body>
</html>