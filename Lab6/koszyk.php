<?php
session_start();
include 'funkcje.php';

if(isset($_GET['remove']) && (!empty($_GET['remove'] || $_GET['remove'] == 0))){
    removeItemFromCart($_GET['remove']);
}
if(isset($_GET['emptyCart']) && (!empty($_GET['emptyCart'] || $_GET['emptyCart'] == 0))){
    emptyCart();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twój aktualny koszyk</title>
</head>
<body>


<?php
foreach($_SESSION['koszyk'] as $produkt){
    echo "<div>
                <p>Name: ".$produkt['nazwa']." Amount: ".$produkt['ilosc']."</p>
                <input type='hidden' name='produkt' value=".$produkt.">
                <a href='?remove=".$produkt['nazwa']."'>Usun z koszyka</a>
              </div><br/>";
}
?>
<a href='?emptyCart=all'>Wyczyść koszyk</a><br>
<a href="sklep.php">Kontynuuj zakupy</a>
</body>
</html>