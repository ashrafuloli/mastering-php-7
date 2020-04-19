<?php
$fruits = [
    'apple',
    'banana',
    'orange',
    'plum',
    'dates',
    'mango',
];
$random = [
    "a" => 10,
    "b" => 20,
    "c" => 30,
    "d" => 40,
    "e" => 50,
    12  => 78,
    "g" => 60,
];

$newFruits1 = array_slice( $fruits, 0, 3 );
$newFruits2 = array_slice( $fruits, 3, null, true );
$newFruits = array_merge( $newFruits1, $newFruits2 );
print_r($newFruits1);
print_r($newFruits2);
print_r($newFruits);

$newfruitsPlus = $newFruits1 + $newFruits2;

print_r($newfruitsPlus);

$r1 = array_slice( $random, 0, 2, true );
$r2 = array_slice( $random, 4, null, true );
$r3 = ["j" => 45, "k" => 12];

$randomData = array_splice($random,2,2,["j"=>45,"k"=>12]);
$randomDataCorrectWay = $r1 + $r3 + $r2;

print_r( $random );
print_r( $randomDataCorrectWay ); // key preserve proverly