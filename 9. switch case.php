<?php

$n = 12;
$r = $n % 2;

switch ( $r ) {
case 0:
    echo "{$n} is an even number";
    break;

default:
    echo "{$n} is an Odd number";
    break;
}

echo "\n";

$color = "red";

switch ( $color ) {
    /*
    case 'red':
        echo "{$color} is our favorite color";
        break;
    case 'blue':
        echo "{$color} is our favorite color";
        break;
    */
    case 'red':
    case 'blue':
        echo ucwords($color) ."is our favorite color";
        break;
    case 'green':
        echo "{$color} is not our favorite color";
        break;
    default:
        echo "this color is ok";
}

echo "\n";

$num = -13;
$result = $num % 2;

switch ($result) {
    case 0:
        switch ($num) {
            case $num > 0:
                echo "$num is a positive even number";
                break;
            case $num < 0:
                echo "$num is a negative even number";
                break;
        }
        break;
    
    default:
        switch ($num) {
            case $num > 0:
                echo "$num is a positive odd number";
                break;
            case $num < 0:
                echo "$num is a negative odd number";
                break;
        }
    break;
}

echo "\n";

switch (true) {
    case ( 0 == $result && $num > 0):
        echo "$num is a positive even number";
        break;
    case ( 1 == $result && $num > 0):
        echo "$num is a positive odd number";
        break;

    case ( 0 == $result && $num < 0):
        echo "$num is a negative even number";
        break;
    case ( -1 == $result && $num < 0):
        echo "$num is a negative odd number";
        break;
}

echo "\n";



$string = "8balls";

switch ($string) {
    case (string) '9balls':
       echo "Nice Ball";
        break;
    case (string) 8:
        echo "8";
            break;
    case (string) '8balls':
        echo "Eight Ball";
            break;
    default:
        # code...
        break;
}