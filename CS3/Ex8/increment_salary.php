<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=iwplab', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$rows = $pdo->query("UPDATE person SET salary=salary+salary*0.1 WHERE department='SALE'");
$affected_rows = $rows->rowCount();
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
    <h1>Affected Rows: <?php echo $affected_rows ?></h1>    
</body>

</html>