<?php

// while loop
// while (true) {     
// Do something constantly
// Infinite loop: DON'T run this
// }

// Loop with $counter
$counter = 0;
while ($counter < 10) {
    echo $counter . '<br>';
    // if ($counter > 5) break;
    $counter++;
}


echo '<br>';

// do-while loop
$counter = 0;
do {
    echo $counter . '<br>';
    $counter++;
} while ($counter < 10);

echo '<br>';

// for loop
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

echo '<br>';

// for-each loop
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) {
    echo $i . " => " . $fruit . "<br>";
}

echo '<br>';

// Iterate over associative array
$person = [
    'name' => 'Ritwik',
    'surname' => 'Neema',
    'age' => 21,
    'hobbies' => ['Music', 'Tech', 'Video Games']
];

foreach ($person as $key => $value) {
    echo $key . ' => ' . $value . '<br>';
}

echo '<br>';

foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key . ' => ' . implode(", ", $value) . '<br>';
    } else {
        echo $key . ' => ' . $value . '<br>';
    }
}
