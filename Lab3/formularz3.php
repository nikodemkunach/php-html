<?php
$kraje = array("Polska" => 20, "Niemcy" => 13, "Portugalia" => 300, "Francja" => 350);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div {
            margin: 10px;
        }
    </style>
</head>
<body style="font-size: 24px">
<form action="formularz33.php" method="post">
    <div>
        <label for="date_1">Data odlotu: </label>
        <input type="date" name="date_1" required>
    </div>
    <div>
        <label for="date_2">Date przylotu: </label>
        <input type="date" name="date_2" required>
    </div>
    <div>
        <label for="iloscosob">Ilosc osob:  </label>
        <input type="number" name="iloscosob" required>
    </div>
    <div>
        <label for="kraj">Wybierz kraj:</label>
        <select name="kraj">
            <?php
            foreach ($kraje as $kraj => $cena) {
                echo "<option name='" . $kraj . "'>" . $kraj . "</option>";
            }
            ?>
        </select>
    </div>
    <div>
        <label for="submit">Sprawdz cene podrozy:  </label>
        <input type="submit" name="Wyszukaj..." value="submit">
    </div>
</form>
</body>
</html>