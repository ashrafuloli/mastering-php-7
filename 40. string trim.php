<?php 

// trim ltrim rtrim

$string = "  hello \n,";
$string = trim($string,' ,');
// $string = ltrim($string,' ,');
// $string = rtrim($string,' ,');
echo $string;

echo "Data";