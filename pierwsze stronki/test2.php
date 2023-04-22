<?php
    $a = 3;
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tytuł mojej strony</title>
    </head>
    <body>
    <div>
        <table>
            <tr>
                <th>Nazwa</th>
                <th>Cena</th>
                <th>Ilosc</th>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
        </table>
    </div>
    <a href="http://pja.edu.pl">PJA</a>
    <br />
    zwykly tekst
    <br />
    druga linia
    <br />

    <img src="pobrane.jpg" />
    <?php
    echo "<br />";
    echo $a;
    ?>

    <?php

    for($i=1; $i<=$a; $i++)
    {
        echo '<tr>';
        for($j=1; $j<=$a; $j++)
        {
            echo '<td>';
            echo $j * $i;
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>
    </body>
    </html>
