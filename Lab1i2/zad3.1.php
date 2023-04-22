<?php
$chooseFrom = array('jeden', 'dwa', 'trzy', 'cztery', 'pięć');
// 3 to liczba losowanych wybranych elementów
$count = 3;
$result = array_rand($chooseFrom, $count);
echo $chooseFrom[$result[0]];
