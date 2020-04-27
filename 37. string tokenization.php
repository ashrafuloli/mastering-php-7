<?php
$string = "Hello World,Wrold How are you";
$string2 = "quick brown fox jumps over the lazy dog";
$parts = explode( " ", $string );
print_r( $parts );

echo PHP_EOL;

// $original = join(" ", $parts);
$original = implode( " ", $parts );
print_r( $original );

echo PHP_EOL;

$parts2 = str_split( $string );
print_r( $parts2 );

// foreach (count_chars($string, 1) as $i => $val) {

//     echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
// }

$parts3 = strtok( $string, " ," );

while ( $parts3 !== false ) {
    echo $parts3 . "\n"; //iterator
    $parts3 = strtok( " ," );
}

echo PHP_EOL;

$parts4 = strtok( $string2, " " );

while ( $parts4 !== false ) {
    echo $parts4 . "\n"; //iterator
    $parts4 = strtok( " " );
}

echo PHP_EOL;
$parts5 = preg_split( "/ |,/", $string );
print_r( $parts5 );
