<?php 

// Create a session id and store it in a cookie on the client side
session_start();


$_SESSION['page_counter'] = $_SESSION['page_counter'] ?? 0;
$_SESSION['page_counter']++;

$page_counter = $_SESSION['page_counter'] ?? 0;
if ($_SESSION['page_counter'] === 10) {
    echo 'Thanks for visiting us 10 times';
    $page_counter = $_SESSION['page_counter'];
    session_unset();
    // session_destroy does not delete the cookie
    session_destroy();
}
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
    <h1>My Page, Visited: <?php echo $page_counter ?> times</h1>
</body>
</html>