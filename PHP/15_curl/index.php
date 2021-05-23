<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data; returns type `resource`, the last data type in '02_variables.php' file
$resource = curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($resource);
// $result = curl_getinfo($resource);
$code = curl_getinfo($resource, CURLINFO_HTTP_CODE);

echo '<pre>';
var_dump($code);
echo '</pre>';
curl_close($resource);

echo $result . '<br>' . '<br>';

$user = [
    'name' => 'John Doe',
    'username' => 'john',
    'email' => 'john@example.com'
];

$resource = curl_init();
curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resource);
curl_close($resource);
var_dump($result);