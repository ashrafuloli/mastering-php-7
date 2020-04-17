<?php

$fruits = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];

// array_slice( $array , $offset , $length , $preserve_keys );
$someFrutis = array_slice( $fruits, 2 );
$someFrutis = array_slice( $fruits, 2, 2 );
$someFrutis = array_slice( $fruits, -5, -1 ); // nagitive
$someFrutis = array_slice( $fruits, -5, -1, true ); // true for actual key

print_r( $someFrutis );

echo PHP_EOL;

$random = [
    "a" => 10,
    "b" => 20,
    "c" => 30,
    "d" => 40,
    "e" => 50,
    12  => 78,
    "g" => 60,
];

$randomData = array_slice( $random, 1, null, true ); // fix 12 => 78

print_r( $randomData );

echo PHP_EOL;

// array_splice() modify orginal array and add new data
$fruits_2 = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];

$newFrutis = [ "jackfruit", "tamarind" ];
$someFrutis = array_splice( $fruits_2, 2, 3 , $newFrutis );
print_r( $someFrutis );

print_r( $fruits_2 );
