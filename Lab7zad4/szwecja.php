<?php
$width = 600;
$height = 300;
$flag = imagecreatetruecolor($width, $height);

$yellow = imagecolorallocate($flag, 255, 255, 0);
$blue = imagecolorallocate($flag, 0,0,255);

imagefill($flag, 0, 0, $blue);
imagefilledrectangle($flag, 150,0,250,300,$yellow);
imagefilledrectangle($flag, 0,100,600,170,$yellow);


header('Content-Type: image/png');
imagepng($flag);