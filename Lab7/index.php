<?php
include 'funkcje.php';

$imgDir = "./imgGallery";

$dir = scandir($imgDir);
array_shift($dir);
array_shift($dir);
usort($dir, cmp());

$count = count($dir);
$numOfPages = ceil($count/4);

if(isset($_GET['pageNum']) && $_GET['pageNum'] <= $numOfPages && $_GET['pageNum'] >= 1){
    $pageNum = (int) $_GET['pageNum'];
} else if($_GET['pageNum'] > $numOfPages || $_GET['pageNum'] < 1 || !isset($_GET['pageNum'])) {
    $pageNum = 1;
}

$photoIndexArr = [];
$photosRange = $pageNum * 4;
if($photosRange > $count){
    $photosRange -= $count;
    for($i = 0; $i < $photosRange; $i++){
        array_push($photoIndexArr, --$count);
    }
} else {
    for ($i = 0; $i < 4; $i++){
        if($photosRange == 0){
            break;
        } else {
            array_push($photoIndexArr, --$photosRange);
        }
    }
}

natsort($photoIndexArr);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galerka</title>
</head>
<body>
<?php
foreach ($photoIndexArr as $index){
    $imgName = $dir["$index"];
    echo "<a href='zdjecie.php?imgid=$index'>
                <img src=\"$imgDir/$imgName\" alt=\"$imgName\" style='height: 200px; width: 200px'/>
                </a>";
}
echo "<br>";
if($pageNum > 1){
    echo "<a href='index.php?pageNum=".($pageNum-1)."'>Poprzednia strona</a> ";
}
if ($pageNum < $numOfPages ){
    echo "<a href='index.php?pageNum=".($pageNum+1)."'>Następna strona</a> ";
}
?>
</body>
</html>