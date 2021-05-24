<?php

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$image_path = '';

if (!$title) {
    $errors[] = 'Product title is required';
}

if (!$price) {
    $errors[] = 'Product price is required';
}

if (!is_dir('images')) {
    mkdir('images');
}

if (empty($errors)) {
    $image = $_FILES['image'] ?? null;
    $image_path = $product['image'];

    if ($image && $image['tmp_name']) {
        if ($image_path) {
            // delete file if it exists
            unlink($image_path);
            rmdir(dirname($image_path));
        }
        $image_path = 'images/' . random_string(8) . '/' . $image['name'];
        mkdir(dirname($image_path));    // Hover over dirname
        move_uploaded_file($image['tmp_name'], $image_path);
    }
}
