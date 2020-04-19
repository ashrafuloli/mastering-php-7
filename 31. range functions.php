<?php

// $numbers = array(12,13,14,15,16);

// $numbers = array();

// for ($i=12; $i < 21; $i++) {
//     array_push($numbers, $i);
// }

// $numbers = range(12,20,2);

foreach ( range( 12, 20, 2 ) as $evenNumber ) {
    echo $evenNumber . "\n";
}

echo PHP_EOL;

foreach ( range( 11, 20, 2 ) as $oddNumber ) {
    echo $oddNumber . "\n";
}

echo PHP_EOL;

foreach ( range( 0, 50, 7 ) as $Number ) {
    if ($Number > 0) {
        echo $Number . "\n";
    }
}


echo PHP_EOL;

foreach ( range( 0, 60, 11 ) as $Number ) {
    if ($Number > 0) {
        echo $Number . "\n";
    }
}

// print_r( $numbers );