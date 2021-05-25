<?php

$username = isset($_GET['username']) ? $_GET['username'] : '';

if ($username) {
    setcookie('username', $username);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18BCE2166 Ex7</title>

    <style>
        body {
            padding: 50px;
            border: 3px solid black;
        }

        div, a {
            margin: 20px;
        }
    </style>

</head>

<body>
    <div>
        <a href="first.php">Page 1</a>
        <a href="second.php">Page 2</a>
    </div>
    <form action="" method="GET">
        <label>
            Username:
            <input type="text" name="username" value="<?php echo $username ?>" required>
        </label>
        <button type="submit">Submit</button>
    </form>
    <?php if ($username) echo "<h3>Welcome, $username</h3>" ?>
</body>

</html>