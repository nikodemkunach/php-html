<?php
$liczba1 = $_GET['liczba1'];
$liczba2 = $_GET['liczba2'];
$znak = $_GET['znak'];
$wynik = "";

function dodawanie($liczba1,$liczba2) {
    return $liczba1 + $liczba2;
}

function odejmowanie($liczba1,$liczba2) {
    return $liczba1 - $liczba2;
}

function mnozenie($liczba1,$liczba2) {
    return $liczba1 * $liczba2;
}

function dzielenie($liczba1,$liczba2) {
    if(isset($_GET['liczba1']) && isset($_GET['liczba2'])) {
        if ($liczba2 == 0) {
            echo "dzielenie przez 0";
        } else {
            return $liczba1 / $liczba2;
        }
    }
}
