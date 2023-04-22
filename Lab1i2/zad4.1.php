<?php
function generuj_zbior($ilosc){

    $ile=0; //deklarujemy na początku zero
    $zbior_liczb=array(); //deklarujemy pustą tablice

//teraz pętla, która szybko wypełni nam tablicę danymi, w typ przypadku danymi
    while($ile>$ilosc){
        $ile++;
        $zbior_liczb[]=$ile;
    }
return $zbior_liczb; //zwraca nam nasz zbiór
}

function losuj_unikalne($zbior,$ile_wylosowac){

    $wylosowane_liczby=array(); //jeszcze nic nie wylosowano, deklarujemy pustą tablice

//pętla załatwi sprawę z ilością losowanych liczb
    for($i=0;$i<$ile_wylosowac;$i++){
        $wylosowany_index = array_rand($zbior,1); //losujemy jakiś element tablicy z całego zbioru
        $wylosowane_liczby[]=$zbior[$wylosowany_index]; //przypisuje wylosowany element tablicy do nowej tablicy
        unset($zbior[$wylosowany_index]); //po wylosowaniu usuwamy ten element z tablicy by nie dopuścić do jego ponownego wylosowania
    }
return $wylosowane_liczby; //zwraca unikalne wylosowane liczby
}

//no to generujemy
$zbior = generuj_zbior(50); //tworzy nam 50 elementów z których bęziemy losować
$losowanie = losuj_unikalne($zbior,4); //losuje nam 4 unikalne elementy

//wyświetlamy
print_r($losowanie);