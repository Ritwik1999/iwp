<?php 

$username = '';

if (!isset($_COOKIE['username'])) {
    header('Location: first.php');
}

$username = $_COOKIE['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18BCE2166 Ex7</title>
</head>
<body>
    <?php if ($username) echo "<h1>Username: $username</h1>" ?>
</body>
</html>