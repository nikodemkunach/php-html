<?php

$miesiac = 2;
$rok = 1900;


if($miesiac == 1 || $miesiac == 3 || $miesiac == 5 || $miesiac == 7 || $miesiac == 8 || $miesiac == 10 || $miesiac == 12)
{
    echo "miesiąc ma 31 dni";
}
elseif ($miesiac == 4 || $miesiac == 6 || $miesiac == 9 || $miesiac == 11)
{
    echo "miesiac ma 30 dni";
}
elseif ($miesiac == 2 && $rok % 4 == 0) {
        if ($rok % 100 != 0 || $rok % 400 == 0)
    {
        echo "miesiac ma 29 dni";
    }
        else echo "miesiac ma 28 dni";
}
else echo "nie ma takiego miesiąca";


