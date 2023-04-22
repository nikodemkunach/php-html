<?php

$tekst = 'różowe kwiatki rosną na łące';
$cenzura =array('różowe', 'kwiatki', 'łące');
$ile = count($cenzura);


echo '<br /> bez cenzury: <br />';
echo $tekst;
echo '<br /> po ocenzurowaniu: <br />';

for ($i=0; $i<$ile; $i++)
{
    if (strstr($tekst, $cenzura[$i]));
    $dlugosc = strlen($cenzura[$i]);
    $tekst = str_replace($cenzura[$i], substr($cenzura[$i], 0, 2). '***'.substr($cenzura[$i], $dlugosc-1), $tekst);
}
echo $tekst;