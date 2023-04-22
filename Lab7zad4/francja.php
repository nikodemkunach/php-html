<?php
$width = 600;
$height = 400;
$flag = imagecreatetruecolor($width, $height);

$white = imagecolorallocate($flag, 255, 255, 255);
$red = imagecolorallocate($flag, 255, 0, 0);
$blue = imagecolorallocate($flag, 0,0,255);

imagefill($flag, 0, 0, $white);
imagefilledrectangle($flag, 0,0,200,400,$blue);
imagefilledrectangle($flag, 400,0,600,400,$red);

header('Content-Type: image/png');
imagepng($flag);