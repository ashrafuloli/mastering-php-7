<?php

// for

for ( $i = 1; $i < 10; $i++ ) {

    for ( $j = 0; $j < $i; $j++ ) {
        echo "*";
    }

    echo PHP_EOL;
}

echo PHP_EOL;

// while
$i = 0;

while ( $i < 10 ) {
    $i++;
    echo $i . PHP_EOL;
}

echo PHP_EOL;

// do while
$i = 0;

do {
    $i++;
    echo $i . PHP_EOL;
} while ( $i < 10 );

echo PHP_EOL;

// go to
$i = 0;
a:$i++;
echo $i . PHP_EOL;

if ( $i < 10 ) {
    goto a;
}

echo PHP_EOL;

// for loop example

for ( $i = 10, $j = 1; $i > 0; $i -= 1, $j++ ) {
    echo $i . ":" . $j;
    // echo $i . ":" . (11 - $i);
    echo PHP_EOL;
}

echo PHP_EOL;

// factorial (5 = 5*4*3*2*1)

$n = 5;

for ( $i = $n, $factorial = 1; $i > 1; $i-- ) {
    // $factorial = $factorial * $i;
    $factorial *= $i;
}

printf( "Factorial of %d is %d", $n, $factorial );

echo PHP_EOL;
echo PHP_EOL;

$n =
$result = 1;
$j = 1;

for ( $n = 1; $n < 20; $n++ ) {
    $result *= $n;
    $j++;
    echo "factorial of {$n} is {$result} \n";
}

echo "Total {$j} number of operations \n";

echo PHP_EOL;

for ( $i = 0; $i < 100; $i += 7 ) {

// echo $i."\n";

// if($i % 7 == 0) echo $i."\n";
    // if($i % 11 == 0) echo $i."\n";

    echo $i % 7 == 0 ? $i . "\n" : "";
}

echo PHP_EOL;
echo PHP_EOL;

for ( $i = 0, $j = 0; $i < 100; $i += 7, $j += 11 ) {
    echo $i . "\n";
    echo $j < 100 ? $j . "\n" : "";
}

echo PHP_EOL;
echo PHP_EOL;

// while loop

$j = 0;

while ( $j< 5) {
    echo $j;
    echo PHP_EOL;
    $j++;
}

echo PHP_EOL;

$i = 0;

while ( $i++ < 5) {
    echo $i;
    echo PHP_EOL;
}

echo PHP_EOL;

$i = 0;

while ( ++$i < 5) {
    echo $i;
    echo PHP_EOL;
}


// fibonacci series = 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2548

$varyold = 0;
$old = 1;
$new = 1;

for ($i=0; $i < 10; $i++) { 
    echo $varyold. " ";
    $old = $new;
    $new = $old + $varyold;
    $varyold = $old;
}