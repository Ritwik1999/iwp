<?php

// create simple string
$name = 'Ritwik';
$string1 = 'Hello I am ' . $name . '. I am 21 years old.';
$string2 = "Hello I am $name. I am 21 years old";
echo $string1 . '<br>';
echo $string2 . '<br><br>';

// String concatenation
echo 'Hello ' . ' World' . ' and PHP' . '<br><br>';

// String functions
$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>';
echo "2 - " . trim($string) . '<br>';
echo "3 - " . ltrim($string) . '<br>'; // HTML ignores whitespaces, check the source instead
echo "4 - " . rtrim($string) . '<br>';
echo "5 - " . str_word_count($string) . '<br>';
echo "6 - " . strrev($string) . '<br>';
echo "7 - " . strtoupper($string) . '<br>';
echo "8 - " . strtolower($string) . '<br>';
echo "9 - " . ucfirst('hello') . '<br>';
echo "10 - " . lcfirst('HELLO') . '<br>';
echo "11 - " . ucwords('hello world') . '<br>';
echo "12 - " . strpos($string, 'world') . '<br>';
echo "13 - " . stripos($string, 'world') . '<br>';
echo "14 - " . substr($string, 8) . '<br>';
echo "15 - " . substr($string, 8, 5) . '<br>';
echo "16 - " . str_replace('World', 'PHP', $string) . '<br>';
echo "17 - " . str_ireplace('world', 'PHP', $string) . '<br>';
echo "18 - " . str_repeat('Hello', 2) . '<br><br>';

$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>';
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br><br>';

// Multiline text and line breaks
$longText = "
    Hello, my name is Ritwik
    I am 21,
    I love tech
";
echo $longText . '<br>';
// Insert a br at each new line
echo nl2br($longText) . '<br><br>';

// Multiline text and reserve html tags
$longText = "
Hello, my name is <b>Ritwik</b>
I am <b>21</b>,
I love tech
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>';
echo "4 - " . nl2br(htmlentities($longText)) . '<br>';
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>';
echo "6 - " . htmlspecialchars($longText) . '<br>';