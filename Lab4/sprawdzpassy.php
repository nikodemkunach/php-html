<?php
session_start();
$log = $_POST['log'];
$has = $_POST['has'];
if ($log != "admin" || $has != "admin") {
    echo "Błędny login lub hasło!";
    echo "<li><a href=zad3.php>Powrót</a></li>";
}
else {
    $_SESSION["logged"] = true;
    header('Location: http://szuflandia.pjwstk.edu.pl/~s25030/Lab4/zalogowano.php');
}
?>