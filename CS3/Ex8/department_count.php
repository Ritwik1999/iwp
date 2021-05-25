<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=iwplab', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare("SELECT department, COUNT(department) AS count FROM person GROUP BY department");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
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
    </style>

</head>

<body>
    <h1>Department Wise Count</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Department</th>
                <th>Count</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $record) { ?>
                <tr>
                    <td><?php echo $record['department'] ?></td>
                    <td><?php echo $record['count'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>