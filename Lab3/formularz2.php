<?php
$liczba1 = $_POST['liczba1'];
function liczbapierwsza($liczba1)
{
    $licznik = 0;
    if ($liczba1 == 1) {
        return "Liczba nie jest pierwsza. Ilość iteracji: " . $licznik . "<br>";
    }
    for ($i = 2; $i * $i <= $liczba1; $i++) {
        $licznik++;
        if ($liczba1 % $i == 0) {
            return "Liczba nie jest pierwsza. Ilość iteracji: " . $licznik . "<br>";
        }
    }
    return "Liczba jest pierwsza. Ilość iteracji: " . $licznik . "<br>";
}
if (isset($_POST['liczba1'])) {
    echo liczbapierwsza($_POST['liczba1']);
}