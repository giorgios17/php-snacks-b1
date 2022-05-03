<?php
/* Snack 1 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$result = [
    [
        "home" => "New Orleans",
        "away" => "Red Bulls",
        "homeScore" => "58",
        "awayScore" => "68"
    ],
    [
        "home" => "Galacticos",
        "away" => "Burundi",
        "homeScore" => "82",
        "awayScore" => "69"
    ],
    [
        "home" => "Los angeles",
        "away" => "Miami",
        "homeScore" => "61",
        "awayScore" => "77"
    ]
    ];
echo "<pre>";
var_dump($result);
echo "</pre>";

for($i = 0; $i< count($result); $i++){
    echo "<h2>Match n. </h2>" . $i ;
    var_dump($result[$i]);
}

?>