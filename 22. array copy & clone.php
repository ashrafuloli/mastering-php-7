<?php

$person = [
    'fname' => 'hello',
    'lname' => 'world',
];

// copy by value or deep copy
$newperson = $person;
$newperson['lname'] = 'pluto';

print_r( $person );
echo PHP_EOL;
print_r( $newperson );

echo PHP_EOL;

$person_2 = [
    'fname' => 'hello',
    'lname' => 'world',
];

// copy by reference or shallow copy
$newperson_2 = &$person_2;
$newperson_2['lname'] = 'pluto';

print_r( $person_2 );
echo PHP_EOL;
print_r( $newperson_2 );

echo PHP_EOL;

function printData(&$person_2){
    $person_2['fname'] .= "Changed";
    print_r($person_2);
}

printData($person_2);
echo PHP_EOL;
print_r($person_2);
