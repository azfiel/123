<?php
$do_bazy=mysqli_connect("localhost","root","","ksiegarnia");
if(!$do_bazy){
    exit("Błąd z połączeniem!");
}
$nazwisko=$_POST['nazw'];
$imie=$_POST['im'];
$kod=$_POST['kod'];
$miejscowosc=$_POST['mia'];
$ulica=$_POST['ul'];
$nrdom=$_POST['nr'];
$mail=$_POST['mail'];
$pesel=$_POST['pesel'];
$telefon=$_POST['tel'];
$aktualny=mysqli_query($do_bazy,"UPDATE klient SET Nazwisko='$nazwisko', Imie='$imie', kod_pocztowy='$kod', miejscowosc='$miejscowosc', ulica='$ulica', nr_domu='$nrdom', PESEL='$pesel', telefon='$telefon', adres_e_mail='$mail' WHERE nazwisko='Nowak' and Imie='Andrzej';");
$zapytanie=mysqli_query($do_bazy,$aktualny);
if (!$zapytanie==True) {
    mysqli_close($do_bazy);
    exit("<br>Błąd w zapytaniu dane nie zostaly zaaktualizowane");
}
else{
    echo "dane zostaly zaaktualizowane";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>