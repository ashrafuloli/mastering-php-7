<?php

$x = 7;
$y = 5;

function greaterOrSmaller( $x, $y ) {

    if ( $x > $y ) {
        return 1;
    } elseif ( $x == $y ) {
        return 0;
    } else {
        return -1;
    }

}

if(greaterOrSmaller($x,$y) == 1){
    echo "{$x} is greater than {$y}";
}elseif (greaterOrSmaller($x,$y) == 0) {
    echo "{$x} is exual than {$y}";
}elseif (greaterOrSmaller($x,$y) == -1) {
    echo "{$x} is smaller than {$y}";
}

echo PHP_EOL;

// spaceship operator
// echo 1 <=> 1; // 0
// echo 1 <=> 2; // -1
// echo 2 <=> 1; // 1

$result = $x <=> $y;


if($result == 1){
    echo "{$x} is greater than {$y}";
}elseif ($result == 0) {
    echo "{$x} is exual than {$y}";
}elseif ($result == -1) {
    echo "{$x} is smaller than {$y}";
}