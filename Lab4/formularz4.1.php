<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>
<body>
<form action="formularz4.1.1.php" method="get">
    <div>
        <label for="pierwszaliczba">Podaj pierwsza liczba</label><br />
        <input type="text" name="liczba1" size="10">
        <br />
        <label for="dzialanie">Wybierz dzialanie</label><br />
        <select name="znak">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        <br />
        <label for="drugaliczba">Podaj druga liczba</label><br />
        <input type="text" name="liczba2" size="10">
    </div>
    <br />
    <div>
        <input type="submit" name="oblicz" value="Oblicz" />
    </div>

</form>

</body>
</html>
