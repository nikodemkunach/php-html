<?php
function removeItemFromCart($item){
    unset($_SESSION['koszyk'][$item]);
}

function addItemToCart($item, $cena){
    if($_SESSION['koszyk'][$item]['ilosc'] > 0){
        $_SESSION['koszyk'][$item]['ilosc'] += 1;
    } else {
        $_SESSION['koszyk'][$item] = array('nazwa' => $item, 'cena' => $cena, 'ilosc' => 1);
    }
}

function emptyCart(){
    unset($_SESSION['koszyk']);
}
?>