<?php

$age = 21;
$salary = 30000;

// Sample if
if ($age == 21) {
    echo "1" . '<br>';
}

// Sample if-else
if ($age > 20) {
    echo "1".'<br><br>';
} else {
    echo "2".'<br><br>';
}

// Difference between == (only values compared) and === (Both values and types compared)
$age == 21; // true
$age == '21'; // true

$age === 21; // true
$age === '21'; // false

// if AND
if ($age == 20 && $salary == 30000) {
    echo "Do something<br>";
}

// if OR
if ($age > 20 OR $salary === 300000) {
    echo "Do something else<br>";
}

// Ternary if
echo $age < 22 ? 'Young' : 'Old';   // Change $age to 60
echo '<br><br>';

// Short ternary
$myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"; change $age to 0
var_dump($myAge);
echo '<br><br>';

// Null coalescing operator
$myName = isset($name) ? $name : 'Ritwik';
$myName = $name ?? 'John'; // Equivalent of above
echo $myName.'<br><br>';

// swtich
$userRole = 'admin';    // editor, user, admin, or anything else

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;

    case 'editor':
        echo 'You can edit content<br>';
        break;
    
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    
    default:
        echo 'Unknown Role<br>';
        break;
}