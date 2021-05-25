<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=iwplab', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    $statement = $pdo->prepare("INSERT INTO person (id, name, dob, department, salary) VALUES (:id, :name, :dob, :department, :salary)");
    $statement->bindValue(':id', $id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':dob', $dob);
    $statement->bindValue(':department', $department);
    $statement->bindValue(':salary', $salary);
    if ($statement->execute()) echo "<script>alert('Record inserted');</script>";
    else echo "<script>alert('Record could not be inserted');</script>";
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
            ID:
            <input type="text" name="id" pattern="\d{1,3}" title="max 3 digit number" required>
        </label>
        <label>
            Name:
            <input type="text" name="name" required>
        </label>
        <label>
            DOB:
            <input type="date" name="dob" required>
        </label>
        <label>
            Department:
            <input type="text" name="department" pattern="[A-Z]{1,10}" title="Uppercase letters, max 10" required>
        </label>
        <label>
            Salary:
            <input type="text" name="salary" pattern="\d{4,8}" title="Numbers of length min 4 max 8" required>
        </label>
        <span><button type="submit">Submit</button></span>
    </form>
</body>

</html>