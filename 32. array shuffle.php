<?php
$numbers = range( 40, 72 );

// print_r($numbers);

$random = mt_rand( 0, 32 );
// echo $numbers[$random]."\n";

$random = mt_rand( 0, 32 );
// echo $numbers[$random]."\n";

$luck = $numbers[$random];

if ( $luck % 2 == 0 ) {
    echo "Head";
} else {
    echo "Tail";
}

shuffle( $numbers );
print_r( $numbers );

$randomNumber = $numbers[3];
echo $randomNumber;

echo PHP_EOL;

$fruits = ['a' => 'array', 'b' => 'banana', 'c' => 'dates'];

// shuffle($fruits);

$key = array_rand($fruits);
print_r($fruits[$key]);