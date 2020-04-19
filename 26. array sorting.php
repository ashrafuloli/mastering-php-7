<?php
$fruits = ['a' => 'apple', 'b' => 'banana', 'f' => 'orange', 'p' => 'plum', 'd' => 'dates', 'm' => 'mango'];

// sort( $fruits ); // sort with out key preserve
// asort( $fruits ); // sort with key preserve
ksort( $fruits ); // sort by key
print_r( $fruits );

echo PHP_EOL;

foreach ( $fruits as $fruit ) {
    echo $fruit . "\n";
}

echo PHP_EOL;

$numbers = [11, 2, 35, 6, 5, 45, 68, 4, 95, 3, 44, 1];

// sort( $numbers );
// asort( $numbers );
rsort( $numbers ); // sort reverce
print_r( $numbers );

// for ($i=0; $i < count($numbers); $i++) {

//     echo $numbers[$i]."\n";
// }

echo PHP_EOL;

foreach ( $numbers as $number ) {
    echo $number . "\n";
}

echo PHP_EOL;

$numbers_2 = [1, 11, 2, 35, 6, 5, 45, 68, 4, 95, 3, 44];

sort( $numbers_2, SORT_STRING );
print_r( $numbers_2 );

$randeom = ["apple", "Apple", "banana", "Banana", "Pineapple"];
// sort($randeom ); // case sensitive
sort( $randeom, SORT_STRING | SORT_FLAG_CASE ); // case in sensitive
print_r( $randeom );