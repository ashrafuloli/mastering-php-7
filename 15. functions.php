<?php
/** =====================================
 *   All Function Make
 *========================================*/

// encapsulation

/**
 * Determines if the argument is even or odd
 */
function isEven( $num ) {

// $num its called (parameter)

    if ( $num % 2 == 0 ) {
        return true;
    }

    return false;

}

function factorial( int $n ) {

// parameter type require php7

// if use php5

// if(gettype($n) != "integer"){

//     return "invalid";
    // }

    $result = 1;

    for ( $i = $n; $i > 1; $i-- ) {
        $result *= $i;
    }

    return $result;
}

// return type php7 =>    ():int
function sum( int $x = 0, int $y = 0, int $z = 0 ): int {
    return $x + $y + $z;
}

function unlimited_sum( int $x = 0, int $y = 0, int...$numbers ): int {
    $result = 0;

    for ( $i = 0; $i < count( $numbers ); $i++ ) {
        $result += $numbers[$i];
    }

    $new_result = $result + $x + $y;

    return $new_result;
}

// one function for single task its best practice
function doTaskA() {
    echo "Step A Done \n";
}

function doTaskB() {
    echo "Step B Done \n";
}

function doTaskC() {
    echo "Step C Done \n";
}

function doTaskD() {
    echo "Step D Done \n";
}

function doTaskE() {
    echo "Step E Done \n";
}

function doTheLargerTask() {
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}

// recursion function (recursion)

function printN( $i ) {

    if ( $i >= 10 ) {
        return;
    }

    echo $i . "\n";
    $i++;
    printN( $i );
}

function printNumber( $counter, $end, $stepping = 1 ) {

    if ( $counter > $end ) {
        return;
    }

    echo $counter . "\n";
    $counter += $stepping;
    printNumber( $counter, $end, $stepping );
}

// fibonacci series with recursion

function fibonacci( $old, $new, $end ) {

    static $start;
    $start = $start ?? 1;

    if ( $start > $end ) {
        return;
    }

    $start++;

    echo $old . " ";

    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci( $old, $new, $end );
}

function factorial_rec( $n ) {

    if ( $n <= 1 ) {
        return 1;
    }

    return $n * factorial_rec( $n - 1 );
}

/** =====================================
 *   All Function Call
 *========================================*/

$x = 13;

if ( isEven( $x ) ) { // $x its called (arguments)
    echo "{$x} is an even number";
} else {
    echo "{$x} is an odd number";
}

echo PHP_EOL;

$x = 5;
echo "Factorial fo {$x} is " . factorial( $x );

echo PHP_EOL;

echo sum( 5, 4, 7 );

echo PHP_EOL;

echo unlimited_sum( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );

echo PHP_EOL;

doTheLargerTask();

echo PHP_EOL;

printN( 0 );

echo PHP_EOL;

printNumber( 21, 37, 3 );

echo PHP_EOL;

fibonacci( 0, 1, 10 );

echo PHP_EOL;

echo factorial_rec( 5 );