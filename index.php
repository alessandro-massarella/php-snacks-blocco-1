<!-- Esercizio 2 - PHP Loops
repo: php-snacks-blocco-1
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

// creo un array, contenente a sua volta una serie di partite
$matches = [
    [
        "home" => "Trieste", 
        "away"  => "Trento", 
        "points_home" => 92,
        "points_away" => 82
    ],

    [
        "home" => "Cantù", 
        "away"  => "Brescia", 
        "points_home" => 89,
        "points_away" => 92
    ],

    [
        "home" => "Fortitudo", 
        "away"  => "Cremona", 
        "points_home" => 85,
        "points_away" => 71
    ],

    [
        "home" => "Venezia", 
        "away"  => "Varese", 
        "points_home" => 86,
        "points_away" => 77
    ]
]; 

// var_dump($matches);


// var_dump($matches["0"]["home"]);
// echo ($matches[0]["home"]);

for ($i = 0; $i < 4; $i++) {
    echo ($matches[$i]["home"]) . " - " .($matches[$i]["away"]) . " | " . ($matches[$i]["points_home"]) . " - " .($matches[$i]["points_away"])
    
    
    . "<br />";
}
?>

