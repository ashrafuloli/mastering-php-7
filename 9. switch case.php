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

$num = 12;
$result = $num % 2;

// switch ($result) {
//     case 0:
//         switch ($num) {
//             case $num > 0:
//                 echo "$num is a positive even number";
//                 break;
//             case $num < 0:
//                 echo "$num is a negative even number";
//                 break;
//         }
//         break;
    
//     default:
//         switch ($num) {
//             case $num > 0:
//                 echo "$num is a positive odd number";
//                 break;
//             case $num < 0:
//                 echo "$num is a negative odd number";
//                 break;
//         }
//     break;
// }


switch (true) {
    case ( $result == 0 && $num > 0):
        echo "$num is a positive even number";
        break;
    case ( $result == 1 && $num > 0):
        echo "$num is a positive odd number";
        break;

    case ( $result == 0 && $num < 0):
        echo "$num is a negative even number";
        break;
    case ( $result == 1 && $num < 0):
        echo "$num is a negative odd number";
        break;
}

echo "\n";

