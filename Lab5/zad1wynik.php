<?php
include "funkcjezad1.php";
$liczba1 = $_GET['liczba1'];
$liczba2 = $_GET['liczba2'];
$znak = $_GET['znak'];
$wynik = "";

switch ($znak)
{
    case "+":
        echo dodawanie($liczba1,$liczba2);
        break;
    case "-":
        echo odejmowanie($liczba1,$liczba2);
        break;
    case "*":
        echo mnozenie($liczba1,$liczba2);
        break;
    case "/":
        echo dzielenie($liczba1,$liczba2);
        break;
}
?>