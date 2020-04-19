<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

function square( $n ) {
    printf( "square of %d is %d \n", $n, $n * $n );
}

array_walk( $numbers, 'square' );

function cube( $n ) {
    $new = sprintf( "cube of %d is %d \n", $n, $n * $n * $n );
    return $new;
}

$newArray = array_map( 'cube', $numbers );

print_r( $newArray );

function even( $n ) {
    return $n % 2 == 0;
}

$newArray2 = array_filter( $numbers, 'even' );

print_r( $newArray2 );

function odd( $n ) {
    return $n % 2 == 1;
}

$newArray3 = array_filter( $numbers, 'odd' );

print_r( $newArray3 );

$person = ['sujon', 'kabir', 'sabab', 'salib', 'roni', 'jamal', 'sayma'];

function filterByS( $name ) {
    return $name[0] == 's';
}

$newPersons = array_filter( $person, 'filterByS' );
print_r( $newPersons );

function sum( $oldValue, $newValue ) {
    //  even sum
    // if ( $newValue % 2 == 0 ) {
    //     return $oldValue + $newValue;
    // }

    //  odd sum
    // if ( $newValue % 2 == 1 ) {
    //     return $oldValue + $newValue;
    // }

    // return $oldValue;

    return $oldValue + $newValue;


}

$sum = array_reduce( $numbers, 'sum' );
echo $sum;