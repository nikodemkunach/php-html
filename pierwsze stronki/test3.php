<?php

//var_dump($_POST);

if(isset($_POST['imie'])) {
    echo $_POST['imie'] . " wysłał formularz POST";

} elseif(isset($_GET['imie'])) {
        echo $_GET['imie'] . " wysyłał formularz GET";
} else {
    echo "wypełnij dane";
}

//echo $_POST['imie'];