<?php

$string = "Quick brown Fox fox jumps over the lazy fox dog";

echo strpos( $string, "fox" ); //case sensitive
echo PHP_EOL;
echo stripos( $string, "fox" ); //case insensitive
echo PHP_EOL;
echo stripos( $string, "fox", 13 ); //case insensitive with offset
echo PHP_EOL;
echo strripos( $string, "Fox" );
echo PHP_EOL;

$offset = stripos( $string, "Quick" );

if ( $offset !== false ) {
    echo "word was found";
} else {
    echo "word was not found";
}
