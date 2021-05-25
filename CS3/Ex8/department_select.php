<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=iwplab', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$people = [];
$department = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $department = $_POST['department'];
    $statement = $pdo->prepare("SELECT * FROM person WHERE department = :department");
    $statement->bindValue(':department', $department);
    $statement->execute();
    $people = $statement->fetchAll(PDO::FETCH_ASSOC);
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
    <form method="POST">
        <label>
            Department:
            <input type="text" name="department" value="<?php echo $department ?>" pattern="[A-Z]{1,10}" title="Uppercase letters, max 10" required>
        </label>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') echo '<span><button type="submit">Submit</button></span>' ?>        
    </form>
    <?php if (!empty($people)) { ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Department</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($people as $record) { ?>
                    <tr>
                        <td><?php echo $record['id'] ?></td>
                        <td><?php echo $record['name'] ?></td>
                        <td><?php echo $record['dob'] ?></td>
                        <td><?php echo $record['department'] ?></td>
                        <td><?php echo $record['salary'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</body>

</html>