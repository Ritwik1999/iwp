<?php

$username = '';
$greeting = 'Welcome User';
$string = '';
$palindrome_result = null;
$bgcolor_code = 'w';
$bgcolor = 'white';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $bgcolor_code = $_POST['bgcolor'];
    $time = (int)date("H");
    $string = $_POST['palindrome'];
    $palindrome_result = is_palindrome($string);

    if ($time >= 0 && $time < 6) {
        $greeting = "Welcome $username, Good Night";
    } else if ($time >= 6 && $time < 12) {
        $greeting = "Welcome $username, Good Morning";
    } else if ($time >= 12 && $time < 18) {
        $greeting = "Welcome $username, Good Afternoon";
    } else {
        $greeting = "Welcome $username, Good Evening";
    }

    switch ($bgcolor_code) {
        case 'r':
            $bgcolor = 'red';
            break;

        case 'g':
            $bgcolor = 'green';
            break;

        case 'b':
            $bgcolor = 'blue';
            break;

        case 'l':
            $bgcolor = 'black';
            break;

        case 'o':
            $bgcolor = 'orange';
            break;

        default:
            $bgcolor = 'white';
            break;
    }
}

function is_palindrome($s)
{
    $len = strlen($s);
    $res = true;

    for ($i = 0; $i < (int)($len / 2); $i++) {
        if ($s[$i] != $s[$len - 1 - $i]) {
            $res = false;
            break;
        }
    }

    return $res;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>18BCE2166 Ex1</title>

    <style>
        body {
            padding: 50px;
            background-color: <?php echo $bgcolor ?>;
        }
    </style>

</head>

<body>
    <?php echo "<h1>$greeting</h1>" ?>
    <form action="" method="POST">
        <div class="form-group">
            <label>Enter your name</label>
            <input type="text" class="form-control" name="username" value="<?php echo $username ?>" required>
        </div>
        <div class="form-group">
            <label>Select Background Color</label>
            <select class="custom-select" name="bgcolor" required>
                <option value="w" <?php if ($bgcolor_code == "w") echo "selected" ?>>White</option>
                <option value="r" <?php if ($bgcolor_code == "r") echo "selected" ?>>Red</option>
                <option value="g" <?php if ($bgcolor_code == "g") echo "selected" ?>>Green</option>
                <option value="b" <?php if ($bgcolor_code == "b") echo "selected" ?>>Blue</option>
                <option value="l" <?php if ($bgcolor_code == "l") echo "selected" ?>>Black</option>
                <option value="o" <?php if ($bgcolor_code == "o") echo "selected" ?>>Orange</option>
            </select>
        </div>
        <div class="form-group">
            <label>String to check if it is Palindrome</label>
            <input type="text" class="form-control" name="palindrome" value="<?php echo $string ?>" required>
        </div>
        <button class="btn btn-outline-primary" type="submit">Submit</button>
    </form>
    <?php if (!($palindrome_result === null)) { ?>
        <h1>
            <?php

            if ($palindrome_result) echo "The entered string is a palindrome";
            else echo "The entered string is not a palindrome"

            ?>
        </h1>
    <?php } ?>
</body>

</html>