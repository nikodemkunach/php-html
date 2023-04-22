<?php
session_start();
include "funkcje.php";


if(!isset($_SESSION['koszyk'])){
    $_SESSION['koszyk'] = [];
}
if(isset($_SESSION['koszyk']) && isset($_POST['produkt']) && isset($_POST['cena'])){
    addItemToCart($_POST['produkt'], $_POST['cena']);
}

$produkty = [];
$f = fopen("./produkty.csv", "r");
while (($rekord = fgetcsv($f)) !== FALSE) {
    array_push($produkty, $rekord);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sklep</title>
</head>
<body>
<?php
foreach($produkty as $produkt){
    echo "<form action='sklep.php' method='post'>
              <div>
                <p>".$produkt[0]." - Ilość produktu: ".$produkt[1].", Cena: ".$produkt[2]."złotych"."</p>
                <input type='hidden' name='produkt' value=".$produkt[0].">
                <input type='hidden' name='cena' value=".$produkt[2].">
                <button type='submit'>Dodaj do koszyka</button>
              </div><br/>
              </form>";
}
?>
<a href="koszyk.php">Przejdz do koszyka</a>
</body>
</html>