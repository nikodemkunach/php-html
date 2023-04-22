<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Strona testowa</title>
</head>
<body>
<table>
    <FORM action="formularz4.2.php" method="get">
        <?php
        $tablica[0] = ["name" => "Gdzie jesteś", "link" => "0", "tresc" => "Miejsce"];
        $tablica[1] = ["name" => "Jak masz na imie", "link" => "1", "tresc" => "Imie"];
        $tablica[2] = ["name" => "Jak masz na nazwisko", "link" => "2", "tresc" => "Nazwisko"];
        $menu = $_GET['menu'];
        if (isset($_GET['menu'])==false){$menu=2;}
        if ($menu<0 || $menu>2){echo "Błąd";}
        echo "<h1>".$tablica[$menu]["name"]."</h1>";
        echo $tablica[$menu]["tresc"];
        for ($i=0;$i<3;$i++)
        {
            echo "<li>";
            echo "<a href=formularz4.2.php?menu=";
            echo $tablica[$i]["link"];
            echo ">";
            echo $tablica[$i]["name"];
            echo "</a>";
            echo "</li>";
        }
        ?>
    </FORM>
</table>
</body>
</html>