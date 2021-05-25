<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=iwplab', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $statement = $pdo->prepare("DELETE FROM person WHERE id = :id");
    $statement->bindValue(':id', $id);
    if ($statement->execute()) $message = 'Deleted';
    else $message = 'Could not be deleted';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18BCE2166 Ex8</title>

    <style>
        body {
            padding: 50px;
            border: 3px solid black;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form * {
            margin: 10px;
        }
    </style>

</head>

<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
        <form method="POST">
            <label>
                ID:
                <input type="text" name="id" pattern="\d{1,3}" title="max 3 digit number" required>
            </label>
            <span><button type="submit">Submit</button></span>
        </form>
    <?php } ?>
    <?php echo "<h1>$message</h1>" ?>
</body>

</html>