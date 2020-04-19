<?php
$fruits = ['a' => 'apple', 'b' => 'banana', 'f' => 'orange', 'p' => 'plum', 'd' => 'dates', 'm' => 'mango'];
$numbers = [11, 2, 35, 6, 5, 45, 68, 4, 95, 3, 44, 1];

if ( in_array( 95, $numbers, true ) ) {
    echo "95 is found";
}

echo PHP_EOL;

$offset = array_search( 95, $numbers );
echo $offset;

echo PHP_EOL;

if ( key_exists( 'b', $fruits ) ) {
    echo "Key b exists";
}
