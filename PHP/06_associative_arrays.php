<?php

// Create an associative array
$person = [
    'name' => 'Ritwik',
    'surname' => 'Neema',
    'age' => 21,
    'hobbies' => ['Music', 'Tech', 'Video Games']
];

// Prefer var_dump (print_r prints an empty string for false values)
echo '<pre>';
var_dump($person);
print_r($person);
echo '</pre>';

// Get element by key
echo $person['name'] . '<br>';
echo $person['address'] . '<br>';   // Non-existent (would print a warning or nothing based on php version)

// Set element by key
$person['education'] = 'VIT';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator (php 7.4+)
// if (!isset($person['address'])) {
//     $person['address'] = 'unknown';
// }
// alternatively
// $person['address'] = $person['address'] ?? 'unknown';
// shorter way
$person['address'] ??= 'unknown';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key
echo '<pre>';
var_dump(isset($person['age']));  // Change age into "location"
echo '</pre>';

// Print only the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print only the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
asort($person); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($person);
echo '</pre>';