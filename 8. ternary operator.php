<?php

// ternary operator

$n = 10;

if ( 12 == $n ) {
    echo "Twelve";
} elseif ( 10 == $n ) {
    echo "Ten";
} else {
    echo "A number";
}

echo "\n";

// $numberInWord = (12 == $n) ? "Twelve": "A number";
$numberInWord = ( 12 == $n ) ? "Twelve" : (( 10 == $n ) ? "Ten" : "A number");
echo $numberInWord;

echo "\n";

if ( $n % 2 == 0 ) {
    echo "Even Number";
} else {
    echo "Odd Number";
}

echo "\n";

$result = ( $n % 2 == 0 ) ? "{$n} is an Even Number" : "{$n} is a Odd Number";

echo $result;

