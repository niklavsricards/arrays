<?php

function printArray($array): void {
    foreach ($array as $item) {
        echo $item . ' ';
    }
    echo PHP_EOL;
}

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

echo "Original numeric array: ";
printArray($numbers);

$numbersSorted = $numbers;
asort($numbersSorted);

echo "Sorted numeric array: ";
printArray($numbersSorted);

echo PHP_EOL;

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

echo "Original string array: ";
printArray($words);

$wordsSorted = $words;
sort($wordsSorted);
echo "Sorted string array: ";
printArray($wordsSorted);

