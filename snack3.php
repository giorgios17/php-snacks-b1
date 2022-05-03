<?php
/* Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

$numeriCasuali = [];
while(count($numeriCasuali) < 15){
    $numeroRandom = rand(1,100);
    if(!in_array($numeroRandom, $numeriCasuali)){
        $numeriCasuali [] = $numeroRandom;
    }
}
var_dump($numeriCasuali);
?>