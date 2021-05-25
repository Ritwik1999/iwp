<?php
$ug = '';
$pg = '';
$pro = '';
$education = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ug = $_POST['ug'] ?? '';
    $pg = $_POST['pg'] ?? '';
    $pro = $_POST['pro'] ?? '';
    $education = $ug . " " . $pg . " " . $pro;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18BCE2166 Ex2</title>

    <style>
        body {
            padding: 50px;
            border: 3px solid black;
        }

        main {
            font-size: 1.8rem;
        }

        main * {
            margin: 10px;
        }
    </style>

</head>

<body>
    <main>
        <div>Name: <?php echo $_POST['name'] ?></div>
        <div>Password: <?php echo $_POST['password'] ?></div>
        <div>Gender: <?php echo $_POST['gender'] ?></div>
        <div>Date of Birth: <?php echo $_POST['dob'] ?></div>
        <div>Education: <?php echo $education ?></div>
        <div>Email: <?php echo $_POST['email'] ?></div>
    </main>
</body>

</html>