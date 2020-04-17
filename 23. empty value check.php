<?php 

$name = 0;

if (isset($name)) {
    echo "Name is set";
}else{
    echo "Not set";
}

echo PHP_EOL;

if (empty($name)) {
    echo "Name is empty";
}else{
    echo "Not empty";
}

echo PHP_EOL;

if (isset($name) && (is_numeric($name) || $name != "")) {
    echo "Name is set and ists not empty";
}else{
    echo "Nmae is either not set or it's empty";
}