<?php
$do_bazy=mysqli_connect("localhost","root","","ksiegarnia");
$baza_sql="CREATE DATABASE moje_kino";

if(!$do_bazy){
    exit("Błąd z połączeniem!");
}

if (mysqli_query($do_bazy,$baza_sql)) {
    echo "Baza została utworzona";    
}
else{
    echo "Błąd! Nie mozna utworzyc bazy!";
}
mysqli_close($do_bazy);

?>