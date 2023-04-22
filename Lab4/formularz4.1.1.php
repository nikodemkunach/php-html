<?php
$liczba1 = $_GET['liczba1'];
$liczba2 = $_GET['liczba2'];
$znak = $_GET['znak'];
$wynik = "";
switch ($znak)
{
    case "+":
        $wynik = $liczba1+$liczba2;
        break;
    case "-":
        $wynik = $liczba1-$liczba2;
        break;
    case "*":
        $wynik = $liczba1*$liczba2;
        break;
    case "/":
        if(isset($_GET['liczba1']) && isset($_GET['liczba2'])) {
            if ($liczba2 == 0) {
                echo "dzielenie przez 0";
            } else {
                $wynik = $liczba1 / $liczba2;
            }
        }
        break;
}
echo $wynik;