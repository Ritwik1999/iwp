<?php
// Variable types
/*
    String
    Integer
    Float/Double
    Boolean
    Null
    Array
    Object
    Resource
*/

// Declaring variables
$name = 'Ritwik';
$age = 21;
$isMale = true;
$isFemale = false;
$height = 1.85;
$salary = null;

// true is converted '1' and false and null are converted to '' (empty strings)
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $isFemale . '<br>';
echo $salary . '<br>';
echo $height . '<br><br>';

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br><br>';

// Print the whole variable
var_dump($name, $age, $height, $isFemale, $salary);

// Change the value of the variable
$name = false;
echo '<br><br>' . gettype($name) . '<br><br>';

// Variable checking functions
is_string($name);    // false
is_int($age);    // true
is_bool($isMale);    // true
is_double($height);    // true
is_null($salary);   // true

// Check if variable is defined
isset($name);   // true
isset($address);    // false

// Constants
define('PI', 3.14);
echo PI . '<br><br>';

// Using PHP built-in constants
echo SORT_ASC . '<br>';
echo PHP_INT_MAX . '<br><br>';
