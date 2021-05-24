<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'] ?? null;

if (!$id) {
    header('Location: index.php');
}

$statement = $pdo->prepare('SELECT * FROM products WHERE id=:id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

if ($product) {
    $statement = $pdo->prepare('DELETE FROM products WHERE id=:id');
    $statement->bindValue(':id', $id);
    if ($statement->execute()) {
        $image_path = $product['image'];
        if ($image_path) {
            // delete file if it exists
            unlink($image_path);
            rmdir(dirname($image_path));
        }
    }
    header('Location: index.php');
}