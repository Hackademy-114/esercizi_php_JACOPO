<?php

// esercizio-1
$numeri = [1,2,3,4,5,6,7,8,9,10];
$somma = 0;
$totaleNumeri = 0;

foreach($numeri as $numero){
    if ($numero %2 == 0) {
        $somma += $numero;
        $totaleNumeri++;
    }
}
echo $somma . "\n";
$media = $somma/$totaleNumeri;
echo $media . "\n";

// esercizio-2
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Jacopo', 'surname' => 'Bellina', 'gender' => 'M'],
    ['name' => 'Giovanna', 'surname' => 'lapi', 'gender' => 'F'],
    ['name' => 'Francesca', 'surname' => 'Capone', 'gender' => 'F'],
];
foreach ($users as $user){
    if ($user ['gender'] == 'M') {
        echo 'Buongiorno signor' . ' ' . $user ['name'] . ' ' . $user ['surname'] . "\n"; 
    }else{
    echo 'Buongiorno signora' . ' ' . $user ['name'] . ' ' . $user ['surname'] . "\n"; 
    }
}

// esercizio-3

for ($i=0; $i <= 100 ; $i++) { 
        if ($i %5 == 0 && $i %3 == 0) {
            echo 'HACKADEMY114' . "\n";
        }elseif ($i % 5 == 0) {
            echo 'JAVASCRIPT' . "\n";
        }elseif ($i % 3 == 0) {
            echo 'PHP' . "\n";
        }else{
            echo $i . "\n";
        }
    }














?>

