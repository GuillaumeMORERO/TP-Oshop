<?php

// ici, on déclare la fonction
function presenteToi($name, $age=0) {
    echo 'Hello, je m\'appelle '.$name.PHP_EOL;
    if ($age > 0) {
        echo 'et jai '.$age.' ans'.PHP_EOL;
    }
}

$buddies = [
    'Mylène' => 16,
    'Dany' => 20,
    'Dylan' => 78,
    'Kim' => 82
];

$functionName = 'presenteToi';
foreach ($buddies as $buddy=>$years) {
    // presenteToi($buddy, $years);
    $functionName($buddy, $years);
}

// On appelle cette fonction
// presenteToi('Mylène');
// On appelle cette fonction, à nouveau
// presenteToi('Dany');
// On appelle cette fonction, à nouveau
// presenteToi('Dylan');
// On appelle cette fonction, à nouveau
// presenteToi('Kim');