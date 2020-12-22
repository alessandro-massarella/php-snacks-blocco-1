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






// PHP Snack 2:


// Passare come parametri GET name, mail e age everificare (cercando i metodi che non conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. che mail contenga un punto e una chiocciola
// 3. e che age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”


$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

var_dump($name, $mail, $age);

// rilevo la lunghezza della stringa name
$str_length = strlen($name);
var_dump($str_length);

// controllo che la mail contenga il punto e la chiocciola
$mail_check_a = (strpos($mail, '@') !== false);
var_dump($mail_check_a);
               

$mail_check_b = (strpos($mail, '.') !== false);
var_dump($mail_check_b);
              


// controllo che age sia un numero
$age_is_int= is_numeric($age);
var_dump($age_is_int);


if ($str_length > 2 and 
$age_is_int == true and 
$mail_check_a == true and 
$mail_check_b == true) {
    echo "ACCESSO RIUSCITO";
} 

else {
    echo "ACCESSO NEGATO";
}











?>

