<?php

// Global Scope

// $name = "Earth"; // global scope
// function doSomething(){
//     // global $name;
//     // echo $name;

//     echo $GLOBALS['name'];
// }

// doSomething();

// Local Scope

// function doSomething(){
//     // global $name;
//     $name = "Earth"; // local scope
//     echo $name;
// }

// doSomething();

// Static Scope

function doSomething() {
    static $i; // static scope (store prev data)
    $i = $i ?? 0;
    $i++;

    echo $i . "\n";
}

function doExtra() {
    static $i;
    $i = $i ?? 0;
    $i++;

    echo $i . "\n";
}

doSomething();
doSomething();
doSomething();
doExtra();
doExtra();
doExtra();
doSomething();
doSomething();
doSomething();
doExtra();