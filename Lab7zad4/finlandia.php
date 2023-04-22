<?php
$width = 600;
$height = 300;
$flag = imagecreatetruecolor($width, $height);

$white = imagecolorallocate($flag, 255, 255, 255);
$blue = imagecolorallocate($flag, 0,0,255);

imagefill($flag, 0, 0, $white);
imagefilledrectangle($flag, 150,0,250,300,$blue);
imagefilledrectangle($flag, 0,100,600,170,$blue);


header('Content-Type: image/png');
imagepng($flag);