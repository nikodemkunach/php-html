<?php
$pozycja = $_POST['pozycja'];
setcookie("vote", $pozycja, time()+10, "/");

if(!isset($_COOKIE["vote"])) {
    echo "dziekujemy za oddany głos";
    }
    else echo "nie możesz zagłosować więcej niż raz w tej ankiecie";
?>

