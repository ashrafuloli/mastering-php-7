<?php

$n = 12;

if ($n % 2 == 0) {
    echo "$n is an even number";
}else {
    echo "$n is an Odd number";    
}

echo "\n";


if ($n > 10){
    echo "$n is greater than 10";
}

echo "\n";


/**
 * Logical Operators 
 * =================
 * And ( && )
 * Or ( || )
 * Not ( ! )
 * 
 * And ( and )
 * Or ( or )
 * Xor ( xor )
*/ 

$m = 12;
$n = 12;

if ($m == $n) {
    echo "M is equal N";
}

echo "\n";



$alam = 100;
$rahim = 100;

if ($alam == $rahim) {
    echo "Alam and Rahim has same amount of money";
}elseif ($alam > $rahim) {
    echo "Alam has more money than Rahim";
}elseif ($alam < $rahim) {
    echo "Alam has less money than Rahim";
}elseif ($alam >= $rahim) {
    echo "Alam has same or more money than Rahim";
}

echo "\n";


$age = 13;

if($age >= 13 && $age <= 19){
    echo "This person is a teenager";
}else {
    echo "This person is not a teenager";

}

echo "\n";

$food = "apple";

if ("tuna" == $food || "salmon" == $food) {
    echo "It has Vitamin D";
}else {
    echo " we don't know if {$food} contains vitamin D";
}