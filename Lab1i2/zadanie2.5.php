<?php

//trojkat, prostokat, trapez

$pole = trapez;

function pole1($a, $h)
{
    $a = 5;
    $h = 2;
    return $a * $h / 2;
}

function pole2($a, $b)
{
    $a = 10;
    $b = 4;
    return $a * $b;
}

function pole3($a, $h, $b)
{
    $a = 2;
    $b = 3;
    $h = 2;
    return ($a + $b) * $h / 2;
}

switch($pole) {
    case "trapez":
        echo "Pole trapezu: ";
        echo pole3();
        break;
    case "trojkat":
        echo "Pole trojkata: ";
        echo pole1();
        break;
    case "prostokat":
        echo "Pole prostokata: ";
        echo pole2();
        break;
    default: echo "nie ma takiej figury";
}