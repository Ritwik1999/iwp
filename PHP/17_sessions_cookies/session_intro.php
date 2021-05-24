<?php 

// Create a session id and store it in a cookie on the client side
session_start();
echo session_id();

// This value will persist until the session is not destroyed (even closing the browser app and reopening does not destroy the cookie)
$_SESSION['name'] = 'Ritwik';

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

// To clear a session variable
unset($_SESSION['name']);
// To clear all session variables
var_dump(session_unset());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My Page</h1>
</body>
</html>