<?php

// Magic constants
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';
echo __LINE__ . '<br>';
echo __LINE__ . '<br>';
echo __LINE__ . '<br>';
echo __LINE__ . '<br>';

// Create directory
// mkdir('test');

// Rename directory
//rename('test', 'test2');

// Delete directory
//rmdir('test2');

// Read files and folders inside directory
$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
$lorem = file_get_contents('lorem.txt');
echo $lorem;
echo '<br>';
file_put_contents('lorem.txt', "First line" . PHP_EOL . $lorem);

echo '<br><br>';
// file_get_contents from URL; not recommended to do it in this way
$jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
$users = json_decode($jsonContent, true);
echo gettype($users);
echo '<pre>';
var_dump($users);
echo '</pre>';

// Check if file exists or not
file_exists('lorem.txt'); // true

// Get file size
echo var_dump(filesize('lorem.txt'));

// Delete file
// unlink('lorem.txt');