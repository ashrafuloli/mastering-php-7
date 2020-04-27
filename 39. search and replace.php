<?php
$string = "Quick Brown brown Fox fox jumps over the lazy fox dog";

$replacedString = str_replace( 'brown', 'red', $string );
$replacedIString = str_ireplace( 'brown', 'red', $string, $count );

echo $replacedString;

echo PHP_EOL;

echo $replacedIString;

echo PHP_EOL;

echo "Total Replace: {$count}";

echo PHP_EOL;

$string = str_replace( ['fox', 'brown'], ['cat', 'red'], $string, $total );

echo $string;

echo PHP_EOL;

echo "Total Replace: {$total}";