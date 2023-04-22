<?php

// a^2 + b^2 = c^2

$pitagoras = [5, 13, 12];

sort($pitagoras);

if($pitagoras[0]**2 + $pitagoras[1]**2 == $pitagoras[2]**2)
{
    echo "dane liczby spełniaja twierdzenie pitagorasa";
}
else echo "dane liczby nie spełniają twierdzenia pitagroasa";