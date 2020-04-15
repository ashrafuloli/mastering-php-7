<?php 

$default_lat = 23.9;
$default_lon = 90.9;

$user_lat;
$user_lon;



// if (isset($user_lat)) {
//     $lat = $user_lat;
// }else{
//     $lat = $default_lat;
// }

// $lat = isset($user_lat) ? $user_lat : $default_lat;

// null coalesce operator

$lat = $user_lat ?? $default_lat; // Requere PHP7


echo $lat;
