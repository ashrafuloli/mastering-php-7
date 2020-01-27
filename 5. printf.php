<?php

$fname = "Ashraful";
$lname = "Oli";
$mname = "Islam";


printf('His name is %2$s, %1$s %3$s',$fname,$lname,$mname); //argument number
echo "\n";

printf('The Binary equivalent of %1$d is %1$b',12); //argument user same number
echo "\n";


$n = 45.1254;

printf("%.2f",$n); // .12  
echo "\n";


$x = 123.356; //0123
$y = 24.25; //0024

printf("%08.2f \n", $x);
printf("%08.2f \n", $y);


$fname = "Ashraful";
$lname = "Islam";

$output = sprintf('His name is %s %s ', $fname, $lname); // return

echo strtoupper($output);


