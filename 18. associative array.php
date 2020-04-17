<?php

// associative array

$students = [
    '12' => "hasan",
    '15' => "karim",
    '20' => "jamal",
];

echo $students['15'] . "\n";

echo PHP_EOL;

// print associative array

$foods = [
    'vaetables' => 'bringal, brocolli, carrot, capsicam',
    'frouits'   => 'orange, banana, apple',
    'drinks'    => 'water, milk',
];

// add value in array
// $foods['drinks'] = $foods['drinks'].", orange juice";
$foods['drinks'] .= ", orange juice";// simple way

// echo $foods['vaetables'];

// associative array  with foreach loop

foreach ( $foods as $key => $value ) {
    echo $key . "=" . $value . "\n";
}

echo PHP_EOL;

// loop with  array_keys();

$keys = array_keys( $foods );

// print_r($keys);

for ( $i = 0; $i < count( $keys ); $i++ ) {
    $key = $keys[$i];
    echo $foods[$key] . "\n";
}

echo PHP_EOL;

// loop with  array_values();

$values = array_values( $foods );

for ( $i = 0; $i < count( $values ); $i++ ) {
    $value = $values[$i];
    echo $value . "\n";
}

echo PHP_EOL;

// remove data associative array

$person = [
    'fname' => 'hello',
    'lname' => 'world',
];

print_r($person);

unset($person['lname']);

print_r($person);