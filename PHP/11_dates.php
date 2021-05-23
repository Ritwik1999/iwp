<?php

// Print current date
echo date('d-m-y H:i:s') . '<br>';

// Print yesterday
echo date('d-m-y H:i:s', time() - 24*60*60) . '<br>';

// Different format
echo date('F j Y, H:i:s') . '<br><br>';

// Print current timestamp in seconds
echo time() . '<br>';

$parsed_date = date_parse('2021-05-23 09:00:00');   // Try giving some invalid date
echo '<pre>';
var_dump($parsed_date);
echo '</pre>';

// Parse daee from format
$dateString = 'April 1 2021 12:45:35';

$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';