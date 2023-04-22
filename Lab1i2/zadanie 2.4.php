<?php

$pesel = "42010128286";

$rok = substr($pesel, 0,2);
$miesiac = substr($pesel,2,2 );
$dzien = substr($pesel, 4,2);

echo $dzien . "-" . $miesiac . "-" . $rok;
