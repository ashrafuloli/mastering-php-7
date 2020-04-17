<?php

$foods = [
    'vaetables' => explode( ', ',
        'bringal, brocolli, carrot, capsicam'
    ),
    'frouits'   => explode( ',',
        'orange,banana,apple'
    ),
    'drinks'    => preg_split( '/(, |,)/',
        'water, milk ,White Russian ,Sea Breeze,Screwdriver,Napa-Sun, Ice Pick'
    ),
];

print_r( $foods );

echo PHP_EOL;

// add value in array
array_push( $foods['drinks'], 'orange juice' );

print_r( $foods );

echo PHP_EOL;

echo $foods['vaetables'][2] . "\n";

echo PHP_EOL;

// nasted array
$sample = [
    'test' => [
        'test-again' => [
            'a', 'b', 'c',
        ],
    ],
];

echo $sample['test']['test-again'][2] . "\n";

echo PHP_EOL;

// multidimensional array
$sample_2 = [
    [1, 2, 3, 4],
    [11, 22, 33, 44],
    [111, 222, 333, 444],
    [1111, 2222, 3333, 4444, [5, 6, 7]],
];

// print_r( $sample_2 );

echo $sample_2[3][4][1];