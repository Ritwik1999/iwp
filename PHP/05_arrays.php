<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1];

// Set element by index
$fruits[0] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has some element at an index
isset($fruits[2]);  // true
isset($fruits[3]);  // false

// Append element
$fruits[] = 'Banana';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits).'<br><br>';

// Add element at the end of the array
array_push($fruits, 23);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 100);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element at the beginning of the array
array_shift($fruits);

// Split string into an array
$string = "Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

// Combine array elements into string
echo implode(", ", $fruits) . '<br><br>';

//Check if element exists in the array
var_dump(in_array('Apple', $fruits));
var_dump(in_array('Mango', $fruits));

echo '<br><br>';

// Search element in the array for its index
var_dump(array_search('Mango', $fruits));
var_dump(array_search('Apple', $fruits));

// Merge two arrays
$vegetables = ["Potato", "Cucumber"];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';

// Sorting of array
echo '<pre>';
var_dump($fruits);
echo '</pre>';
// sort($fruits);
rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';