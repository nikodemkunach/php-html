<?php
$text = $_POST['text'].'<br>';
touch('./notatnik.txt');
chmod('./notatnik.txt', 777);

$f = file_put_contents('./notatnik.txt', $text, FILE_APPEND);
echo file_get_contents('./notatnik.txt');
echo "<br>";
echo "<a href='saveFileForm.html'>Powrót<a/>";
fclose();