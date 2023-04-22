<?php
session_start();
if (isSet($_SESSION["logged"]))
{
    echo "Logowanie przebiegło pomyślnie!";
    $arg = $_GET['log'];
    echo "<li><a href=zad3.php?log=0>Wyloguj</a></li>";
    if ($arg == 0) {
        session_destroy();
    }
}
else {echo "Błąd, jesteś na złej stronie. Znajdź stronę z miejscem do zalogowania!";}
?>