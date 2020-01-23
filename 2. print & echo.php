<?php

/**
 * Data Types
 * ===============
 * Integer (int)
 * Double (float)
 * Bollean (bool)
 * Null
 * String
 * Array
 * Object
 * Resource
 */

$name = "Korim";
$age = 12;
$fnum = 12.123;
$nal = null;
$result = true;

var_dump($name); // string
var_dump($age); // int
var_dump($fnum); // float
var_dump($result); // NULL
var_dump($nal); // NULL

$name1 = "Ashraful";
$name2 = "Oli";

var_dump($name1, $name2);

$name = "Earch";

echo "We're Living on {$name} \n"; // simple print

printf("We're Living on %s", strtoupper($name)); // complex print

echo "\n";

$fname = "Ashraful";
$lname = "Oli";

printf("My %s name is %s %s", "full", $fname, $lname);

echo "\n";

echo "My
Name
is
{$fname} {$lname},
How Are you? \n";

$planet1 = "Mercury";
$planet2 = "Jupiter";

echo "This smallest planet is " . $planet1 . " and the bigest planet is " . $planet2 . "\n";
echo "This smallest planet is {$planet1} and the bigest planet is {$planet2} \n";

printf("This smallest planet is %s and the bigest planet is %s \n", $planet2, $planet1);

// php.net/printf
// php.net/var_dump
