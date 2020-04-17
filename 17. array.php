<?php

$students = [
    'rahim',
    'karim',
    123,
    'monir',
];

$n = count( $students );

for ( $i = 0; $i < $n; $i++ ) {
    echo $students[$i] . "\n";
}

echo PHP_EOL;

for ( $i = $n - 1; $i >= 0; $i-- ) {
    echo $students[$i] . "\n";
}

echo PHP_EOL;

// array is not immutable

/**
 * array_pop()
 * array_shift()
 * array_push()
 * array_unshift()
 */

$colors = [
    "red",
    "blue",
    "white",
    "yellow",
    "orange",
];

// $colors[1] = "black";

// array_pop()   // remove array last element and return
$color = array_pop( $colors );

// echo $color."\n";

// array_shift()   // remove array first element and return
$color = array_shift( $colors );

// add element array last // add element array last -> array_push()
$colors[] = "violet";
array_push( $colors, "Brown" );

// add element array fist -> array_unshift()
array_unshift( $colors, "Chocolate" );

$n = count( $colors );

for ( $i = 0; $i < $n; $i++ ) {
    echo $colors[$i] . "\n";
}