<?php

function printArray($array): void {
    foreach ($array as $item) {
        echo $item . ' ';
    }
    echo PHP_EOL;
}

$numbers = [];

for ($i = 0; $i < 10; $i++) {
    $numbers[$i] = rand(1, 100);
}

$copyOfNumbers = $numbers;

$copyOfNumbers[9] = -7;

printArray($numbers);
printArray($copyOfNumbers);
