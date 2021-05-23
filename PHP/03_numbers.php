<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic Operations
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';
echo ($a + $b) * $c . '<br>';

// Assignment with math operators
// $a += $b;
// echo $a . '<br>';

// $a -= $b;
// echo $a . '<br>';

// $a *= $b;
// echo $a . '<br>';

// $a /= $b;
// echo $a . '<br>';

// $a %= $b;
// echo $a . '<br>';

echo '<br>';

// Increment operators
echo $a++ . '<br>';
echo ++$a . '<br><br>';

// Decrement operators
echo $a-- . '<br>';
echo --$a . '<br><br>';

// Number checking functions
is_float(1.25); // true
is_double(1.25);    // true
is_int(5);  // true
is_numeric("3.45"); // true
is_numeric("3g.45"); // false

// Conversion
$strNumber = '12.34';
$number1 = (float)$strNumber;   // or floatval($strNumber);
$number2 = (int)$strNumber;     // or intval($strNumber);
var_dump($number1);
var_dump($number2);
echo '<br><br>';

// Number functions
echo "abs(-15) is " . abs(-15) . '<br>';
echo "pow(2,  3) is " . pow(2, 3) . '<br>';
echo "sqrt(16) is " . sqrt(16) . '<br>';
echo "max(2, 9, 3) is " . max(2, 9, 3) . '<br>';
echo "min(9, 2, 3) is " . min(9, 2, 3) . '<br>';
echo "round(2.4) is " . round(2.4) . '<br>';
echo "round(2.6) is " . round(2.6) . '<br>';
echo "floor(2.6) is " . floor(2.6) . '<br>';
echo "ceil(2.4) is " . ceil(2.4) . '<br><br>';

// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ' ');

// https://www.php.net/manual/en/ref.math.php