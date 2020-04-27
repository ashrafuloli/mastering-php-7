<?php

$name = "Ashraful";

// new line ( \n )
// tab ( \t )
$string01 = "my name is {$name}";

echo $string01;

echo PHP_EOL;

$heredoc = <<<EOD
data 1
new line
\t {$string01}
test line
EOD;

echo $heredoc;

echo PHP_EOL;

// string character set
$x = "Hello World";
echo $x[0];
echo $x[-5];
echo PHP_EOL;
$xlanth = strlen( $x );
echo substr( $x, 1, 4 );
echo PHP_EOL;
echo substr( $x, $xlanth - 3 );
echo PHP_EOL;
echo substr( $x, -3 );
echo PHP_EOL;

// string reverse
$hello = "Hello World";
$hlanth = strlen( $hello ) - 1;

for ( $i = $hlanth; $i >= 0; $i-- ) {
    echo $hello[$i];
}

echo PHP_EOL;

$hlanth = strlen( $hello );
for ( $i = 1; $i <= $hlanth; $i++ ) {
    echo $hello[$i*-1];
}

echo PHP_EOL;

echo strrev($hello);