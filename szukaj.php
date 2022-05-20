<?php
$do_bazy=mysqli_connect("localhost","root","","ksiegarnia");
if(!$do_bazy){
    exit("Błąd z połączeniem!");
}
$zapytanie=mysqli_query($do_bazy,"SELECT * FROM klient WHERE nazwisko='Nowak' and Imie='Andrzej'");
$ile=mysqli_num_rows($zapytanie);

if (!$zapytanie==True) {
    mysqli_close($do_bazy);
    exit("Błąd w zapytaniu");
}

if ($ile=0) {
    exit("Brak danych!");
}

if ($ile>1) {
    exit("Nie można wyodrębnić danych");
}
$wiersz=mysqli_fetch_assoc($zapytanie);

$nazw=$wiersz['nazwisko'];
$im=$wiersz['imie'];
$kod=$wiersz['kod_pocztowy'];
$mia=$wiersz['miejscowość'];
$ul=$wiersz['ulica'];
$nrdom=$wiersz['nr_domu'];
$pesel=$wiersz['pesel'];
$tel=$wiersz['telefon'];
$mail5=$wiersz['adres_e_mail'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modyfikacja danych</title>
    <style>
        p{
            font-weight:bold;
            font-size: 12pt;
        }
    </style>
</head>
<body>
    <form action="aktualizuj.php" method="post">
        <p>Modyfikacja danych klienta</p>
        Nazwisko: <br>
        <input type="text" name="nazw" value="<?php echo $nazw; ?>" size="30"><br>
        Imie:<br>
        <input type="text" name="im" value="<?php echo $im; ?>" size="30"><br>
        Kod pocztowy<br>
        <input type="text" name="kod" value="<?php echo $kod; ?>" size="30"><br>
        Miejscowość:<br>
        <input type="text" name="mia" value="<?php echo $mia; ?>" size="30"><br>
        Ulica:<br>
        <input type="text" name="ul" value="<?php echo $ul; ?>" size="30"><br>
        Numer domu:<br>
        <input type="text" name="nr" value="<?php echo $nrdom; ?>" size="30"><br>
        Adres e-mail:<br>
        <input type="text" name="mail" value="<?php echo $mail; ?>" size="30"><br>
        PESEL:<br>
        <input type="number" name="pesel" value="<?php echo $pesel; ?>" size="30"><br>
        Telefon:<br>
        <input type="number" name="tel" value="<php echo $tel; ?>" size="30"><br>
        
        <input type="submit" name="akt" value="aktualizuj">
    </form>

</body>
</html>