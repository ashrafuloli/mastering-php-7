<?php
$name = "abul hossain 01307128000 abc@gmail.com";

$parts = sscanf( $name, "%s %s %11s %s" );

print_r( $parts );

sscanf( $name, "%s %s %11s %s", $fname, $lname, $mobile, $email );

echo $email;

echo PHP_EOL;

$haxColor = "#ff2f44";
sscanf( $haxColor, "#%2x%2x%2x", $red, $green, $blue ); // x = hexadecimal
echo $green;