<?php
/**
 * string to array with explode() fun;
 * explode('delimeter','sting, sting');
 */
$vaetables = explode( ', ', 'bringal, brocolli, carrot, capsicam' );

echo $vaetables[1] . "\n";

echo PHP_EOL;

/**
 * array to string with join() fun;
 * join('glue', $array );
 */
$vaetablesString = join(', ',$vaetables);

echo $vaetablesString . "\n";

echo PHP_EOL;

/**
 * multiple delimeter with preg_split() fun;
 * preg_split( '/(delimeter|delimeter)/' ,'sting, sting' );
 */
$vaetables = preg_split( '/(, |,)/', 'bringal, brocolli, carrot, capsicam,potato, sweet-potato' );

echo count($vaetables) . "\n";