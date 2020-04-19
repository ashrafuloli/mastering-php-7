<?php

$number1 = [1, 4, 3, 6, 54, 7, 23, 1, 2];
$number2 = [88, 3, 21, 44, 3, 28, 1, 2, 7];

$fruits1 = ['a' => 'apple', 'b' => 'banana', 'c' => 'lemon'];
$fruits2 = ['d' => 'pineapple', 'b' => 'malta', 'g' => 'grapes', 'c' => 'lemon'];


$common = array_intersect($number1 , $number2);
print_r($common);

// $commonf = array_intersect($fruits1 , $fruits2); // check common value
$commonf = array_intersect_assoc($fruits1 , $fruits2); // check common key
print_r($commonf);


$diff = array_diff($number2 , $number1);
print_r($diff);

// $difff = array_diff($fruits2 , $fruits1);// check difff value
$difff = array_diff_assoc($fruits1 , $fruits2); // check difff key
print_r($difff);