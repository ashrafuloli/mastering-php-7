<?php

/**
 * Arithmetic Operators
 * =====================
 * Addition (+)
 * Subtraction (-)
 * Multiplication (*)
 * Division (/)
 * Modulus (%)
 */

$num = 12 + 3; // operand operator operand

$number = 12;
// $number = $number + 13;
// $number += 13;
$number = $number + 20;
// echo $number;

$number = 12 * 2;
// echo $number;

$number = 12 / 2;
// echo $number;

$number = 13 % 5;
// echo $number;

// $number = (13 - 5) * 6;
$number = (24 - 4) / (7 - 2);
// echo $number;

/**
 * Assignment Operators
 * =====================
 * (=) 
 * (+=)
 * (-=)
 * (*=)
 * (/=)
 * (%=)
 */

$number += 1; // $number = $number + 1
// echo $number;

$number = 12;
$number /= 5;

// echo $number;

$number = 12;
$number *= 5;

// echo $number;

/**
 * Increment / Decrement Operators
 * ===============================
 * Pre-increment (++$x)
 * Post-increment ($x++)
 * Pre-decrement (--$x)
 * Post-decrement ($x--)
 */

$number = 12;
$number++;  // $number += 1;    or   $number = $number + 1
$number--;  // $number -= 1;    or   $number = $number - 1

// echo $number; 

$n = 7;

$m = $n++;
/**
 * $m = $n;
 * $n = $n + 1;
 */

$m = ++$n;
/**
 * $n = $n + 1;
 * $m = $n;
 */


echo $m, "\n" , $n;




