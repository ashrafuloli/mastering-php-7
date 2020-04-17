<?php
$student = [
    'fname'   => 'Jamal',
    'lname'   => 'Ahmed',
    'age'     => 15,
    'class'   => 8,
    'section' => 'B',
];

print_r( $student );

echo PHP_EOL;

echo $student['fname'] . " " . $student['lname'] . "\n";

echo PHP_EOL;

printf( "%s %s \n", $student['fname'], $student['lname'] );

echo PHP_EOL;

/**
 * array to serialize object with serialize() fun;
 * serialize( $associative_array );
 */
$serialize = serialize( $student );

print_r( $serialize );

echo PHP_EOL;
echo PHP_EOL;

/**
 * serialize object to array with unserialize() fun;
 * unserialize( $serialize_data );
 */
$newStudent = unserialize( $serialize );

print_r( $newStudent );

echo PHP_EOL;

/**
 * array to json object with json_encode() fun;
 * json_encode( $associative_array );
 */
$jsondata = json_encode( $student );

echo $jsondata;

echo PHP_EOL;
echo PHP_EOL;

/**
 * json object to object with json_decode() fun;
 * if you pass ( True ) peramiter than it will be convart array
 * json_decode( $jsondata );
 */
$newJsonData = json_decode( $jsondata, true );

print_r( $newJsonData );

echo PHP_EOL;