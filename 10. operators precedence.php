<?php 

// $f = ( false || true); // true
// $e = false or true; // ($e = false) or true / $e = false

$f = ( true && false);
$e = true and false;

var_dump($f, $e);

// https://www.php.net/manual/en/language.operators.precedence.php