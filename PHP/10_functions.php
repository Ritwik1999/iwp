<?php

function hello()
{
    echo "Hello, I am Ritwik<br>";
}

hello();
hello();
hello();

echo '<br>';

// functions with arguments
function hello_args($name)
{
    echo "Hello, I am $name <br>";
}

hello_args('Ritwik Neema');
hello_args('Steve Rogers');
hello_args('Tony Stark');

echo '<br>';

// function to sum two numbers
function sum($a, $b)
{
    return $a + $b;
}

echo sum(4, 5) . '<br>';

// function sum with many args
function sum_args(...$nums)
{
    echo '<pre>';
    var_dump($nums);
    echo '</pre>';

    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
    }

    return $sum;
}

echo sum_args(12, 23, 56, 78, 34) . '<br><br>';

// Arrow functions
function sum_args_arrow(...$nums)
{
    // Initially, $carry and $n are first and second elements in the $nums array respectively, the return value from arrow function is $carry for the next iteration, for which $n is the third element.
    return array_reduce($nums, fn ($carry, $n) => $carry + $n);
}

echo sum_args_arrow(12, 23, 56, 78, 34) . '<br><br>';
